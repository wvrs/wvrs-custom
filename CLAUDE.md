# WVRS theme: notes for agents and maintainers

This repo is the `wvrs-custom` WordPress theme (Roots Sage 9, Blade + webpack) for wvrs.org.
**It is a public repo. Never commit IPs, usernames, subscription IDs, keys or `.env` contents.**

## Where production lives

- Azure subscription **"Microsoft Azure Sponsorship"**, resource group `wvrs-rg`, eastus.
- wvrs.org / www.wvrs.org resolve to a single VM (currently `wvrs-main2`). Confirm before acting:
  `dig +short wvrs.org` and `az vm list -d -g wvrs-rg -o table` (match the public IP).
  Other VMs there (portal, elearning) are different sites. The other two subscriptions are empty.
- Auth: `az login --tenant 3f1a3d5c-abca-4df5-9af6-f71c63dd72c6` (tokens expire after 90 idle days; user runs it interactively).
- SSH: `ssh <admin user from 'az vm show -g wvrs-rg -n wvrs-main2 --query osProfile.adminUsername'>@<ip>`
  with the default `~/.ssh/id_rsa`; `sudo` is passwordless. Files are owned by `www-data`.
- Theme path on the VM: `/var/www/wvrs.org/public/wp-content/themes/wvrs-custom`
- The VM's git checkout cannot reach GitHub (no deploy key). Use `git bundle` + scp, or scp single files.
  Run git there as `sudo git -c safe.directory=$PWD ...` (ownership differs).

## How deploys actually work

There is no CI. Historically: edit/copy files on the VM, fix WordPress errors by hand. `dist/` (built assets) is
committed to nothing and was last built on the server in 2025; Blade views in `resources/views` are read directly,
so **view-only changes (e.g. the banner) need no build**: scp the file, `sudo install -o www-data -g www-data -m 644`.
Blade recompiles on mtime change. SCSS/JS changes need a webpack build (`yarn build:production`) and a copy of `dist/`.

Before touching the server: back it up (`sudo tar czf ~/wvrs-custom-theme-<date>.tar.gz wvrs-custom` from the themes dir),
change the minimum number of files, then verify with `curl -sL https://www.wvrs.org/` and check for HTTP 200.
Do not `git pull`/`reset --hard`/rsync --delete over the live tree without diffing first.

## Server maintenance notes

- Apache hardening lives in `/etc/apache2/conf-available/wvrs-hardening.conf` (denies `.git`, `.env*`, readme/license,
  composer/package files). Config backup: `~/apache2-backup-20261124` on the VM.
- Nov 2026: full `apt upgrade` + reboot (Ubuntu 24.04, kernel 7.0.0-1020-azure; 6.14 left as GRUB fallback).
- Azure Backup (vault `defaultVault744`) takes a recovery point of the VM roughly every 4 hours: the rollback path.
- Azure *write* operations (snapshots etc.) require an MFA login; reads work with a plain `az login`.
- `ssh` is socket-activated (`ssh.socket`); `systemctl is-enabled ssh` showing "disabled" is normal.

## Other VMs (same resource group)

- `wvrs-portal` (portal.wvrs.org): nginx + Node app under pm2 (`portal-app`, started at boot by `pm2-<user>.service` via
  `pm2 resurrect`; run `pm2 save` after changing processes). Admin user differs from main2: see `az vm show`.
  Nov 2026: upgraded, rebooted, ufw (22/80/443) + fail2ban enabled. **Not covered by Azure Backup** (as of Nov 2026).
- `wvrs-elearning2026` (Moodle, Debian 13): auto-updates on; no ufw/fail2ban yet. `wvrs-elearning2023` is deallocated.
- All NSGs allow SSH from anywhere (kept open on purpose for now).

## Seasonal banner

`resources/views/partials/banner.blade.php` is date-gated with `strtotime('YYYY-MM-DD 00:00:00 America/New_York')`.
Each year: Christmas trees banner "Sales Begin <day after Thanksgiving>" until that day, then
"Available for Sale" until Dec 25 00:00 ET. Update the dates; no build needed.

## Known loose ends

- Server `.git` was at a 2019 commit with many uncommitted edits (recovered into git in Nov 2026).
- `members.wvrs.org/public` has `.env.bak-*` files; the owner has chosen to leave them (that vhost redirects to the portal, so they are not served). Don't touch them.
- Server git status shows `D CLAUDE.md` on purpose: it is not deployed because the theme dir is web-accessible.
