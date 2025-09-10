# Drupal Onboarding Project (Fixed)

Practice project using **Drupal 11** and **Lando**.  
This repository includes configuration export (`config/sync`), a Projects listing page, and a *Latest Projects* sidebar block — all stored in configuration and versioned in Git.

---

## 🚀 Requirements
- Docker + [Lando](https://lando.dev/) installed
- [Composer](https://getcomposer.org/) 2.x
- Git

---

## ▶️ Quick Start

```bash
# Clone the repository
git clone git@github.com:VictoriaCamFo/DrupalOnboardingFixed.git
cd DrupalOnboardingFixed

# Start Lando
lando start
```
## 📦 Installed Modules
- [Pathauto](https://www.drupal.org/project/pathauto)  
- [Token](https://www.drupal.org/project/token)  
- [Metatag](https://www.drupal.org/project/metatag)  

---

## ⚙️ Configuration Included
- Automatic URL alias pattern for **Project** content:
- /projects/[node:title]
- - A View named **Projects** available at `/projects` (displays Project content with teaser view mode).
- A **Latest Projects** block (3 most recent items) placed in the sidebar.
---

## 📝 Notes
- `vendor/` and contributed modules/themes are excluded from Git (see `.gitignore`).
- All site configuration is stored in `config/sync` and can be imported/exported with Drush:
```bash
lando php code/vendor/bin/drush -r code/web cex -y   # Export config
lando php code/vendor/bin/drush -r code/web cim -y   # Import config
```
## Site Overview
<img width="1551" height="1017" alt="imagen" src="https://github.com/user-attachments/assets/f0148069-aea1-4dd3-b732-3036111bbc69" />

