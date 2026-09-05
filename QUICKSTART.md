# Cleva Front - Quick Start Guide

## Getting Started in 5 Minutes

### Step 1: Verify Files Are in Place
Check that all core pages exist:
```bash
ls -l /Applications/XAMPP/xamppfiles/htdocs/cleva-front/{index,services,domains,about}.html
```

✅ You should see:
- index.html
- about.html  
- services.html
- domains.html

### Step 2: Start Apache Server
**Option A: Using XAMPP GUI (Recommended)**
1. Open XAMPP Control Panel
2. Click "Start" next to Apache
3. Verify "Apache running" appears

**Option B: Using Terminal**
```bash
/Applications/XAMPP/xamppfiles/bin/apachectl start
```

### Step 3: Test in Browser
Open your browser and visit:
- **Home:** http://localhost/cleva-front/
- **Services:** http://localhost/cleva-front/services.html
- **Domains:** http://localhost/cleva-front/domains.html
- **About:** http://localhost/cleva-front/about.html

✅ You should see pages with Cleva branding and navigation menus

### Step 4: Customize for Your Needs
Common changes (no coding needed):

**Change Contact Email:**
Find and replace: `support@cleva.com` → your-email@domain.com

**Change Phone Number:**
Find and replace: `+1 (800) 123-4567` → your-phone-number

**Change Logo:**
Replace these files with your logo:
- `/assets/images/logo/logo-1.svg` (white background version)
- `/assets/images/logo/logo-4.svg` (dark background version)

**Update Prices:**
Find `rt-price` tags and update dollar amounts

### Step 5: Deploy to Live Server
Once ready for production:
1. Copy entire `/cleva-front/` folder to your web hosting
2. Update domain name in Apache config
3. Enable HTTPS/SSL certificate
4. Update any internal links to point to live domain

---

## Key Pages & URLs

| Page | File | URL |
|------|------|-----|
| Home | index.html | http://localhost/cleva-front/ |
| About | about.html | http://localhost/cleva-front/about.html |
| Services | services.html | http://localhost/cleva-front/services.html |
| Domains | domains.html | http://localhost/cleva-front/domains.html |
| Pricing | pricing.html | http://localhost/cleva-front/pricing.html |
| Contact | contact.html | http://localhost/cleva-front/contact.html |

---

## Troubleshooting

### Issue: "Access Forbidden" Error
**Solution:** Fix file permissions
```bash
chmod 755 /Applications/XAMPP/xamppfiles/htdocs/cleva-front/
chmod 644 /Applications/XAMPP/xamppfiles/htdocs/cleva-front/*.html
chmod -R 755 /Applications/XAMPP/xamppfiles/htdocs/cleva-front/assets/
```

### Issue: Apache Won't Start
**Check if port 80 is in use:**
```bash
lsof -i :80
```

**Kill the process using port 80 (if needed):**
```bash
sudo lsof -i :80 | grep LISTEN | awk '{print $2}' | xargs sudo kill -9
```

### Issue: Pages Load but Styles Are Missing
**Verify assets folder exists:**
```bash
ls /Applications/XAMPP/xamppfiles/htdocs/cleva-front/assets/css/
```

**If missing, copy assets from template:**
```bash
cp -R /Users/thankgodokoro/Downloads/us.sitesucker.mac.sitesucker/html.themewant.com/hostie/assets/* /Applications/XAMPP/xamppfiles/htdocs/cleva-front/assets/
```

---

## Making Quick Changes

### Edit in VS Code
1. Open folder: `/Applications/XAMPP/xamppfiles/htdocs/cleva-front/`
2. Click on any .html file
3. Make changes
4. Save (Cmd+S)
5. Refresh browser (Cmd+R)

### Find & Replace Across Files
1. Press Cmd+Shift+H (VS Code)
2. Enter search text (e.g., "support@cleva.com")
3. Enter replacement text (e.g., "support@yourdomain.com")
4. Click "Replace All"
5. Save all files

### Common Replacements
```
"support@cleva.com" → "your-support@domain.com"
"+1 (800) 123-4567" → "your-phone-number"
"$8.99/yr" → "your-pricing"
"99.9%" → "your-uptime-guarantee"
```

---

## Website Structure

```
cleva-front/
├── index.html              ← Start here (home page)
├── about.html              ← Company info
├── services.html           ← Hosting services
├── domains.html            ← Domain registration
├── pricing.html            ← Pricing plans
├── contact.html            ← Contact form
│
├── assets/                 ← Do not modify
│   ├── css/                ← Stylesheets
│   ├── js/                 ← JavaScript
│   ├── images/             ← Images & icons
│   └── fonts/              ← Web fonts
│
├── DOCUMENTATION.md        ← Full docs (this file)
└── README.md               ← Original readme
```

---

## Performance Tips

1. **Cache busting:** Add `?v=1.0` to CSS/JS links after updates
2. **Image optimization:** Compress images before uploading
3. **Lazy loading:** Already enabled for performance
4. **Minification:** CSS and JS are already minified
5. **CDN:** Consider using CDN for assets in production

---

## Security Checklist

- [ ] Change default admin credentials
- [ ] Enable HTTPS/SSL in production
- [ ] Set proper file permissions (644 for files, 755 for directories)
- [ ] Disable directory listing in .htaccess
- [ ] Remove any test/debug files
- [ ] Keep server software updated
- [ ] Use strong passwords for accounts
- [ ] Regular backups

---

## Mobile Optimization

The site is fully responsive and works on:
- ✅ iPhone 6/7/8/X/11/12/13/14/15
- ✅ iPad (all generations)
- ✅ Android phones
- ✅ Tablets
- ✅ Desktop browsers

No additional mobile setup needed!

---

## Next Steps

1. ✅ **Verify everything loads:** Open home page, check all links
2. ✅ **Customize company info:** Update email, phone, address
3. ✅ **Add your logo:** Replace logo files
4. ✅ **Update pricing:** Change prices to match your offerings
5. ✅ **Write content:** Add your company story in about.html
6. ✅ **Test all pages:** Verify links work on desktop and mobile
7. ✅ **Deploy:** When ready, upload to your live server

---

## Support Resources

**Documentation:** See DOCUMENTATION.md for complete guide  
**Theme Docs:** Original theme includes built-in documentation  
**Bootstrap Docs:** http://getbootstrap.com/docs  
**FontAwesome Icons:** https://fontawesome.com/icons  

---

## Quick Commands Reference

```bash
# Start Apache
/Applications/XAMPP/xamppfiles/bin/apachectl start

# Stop Apache  
/Applications/XAMPP/xamppfiles/bin/apachectl stop

# Restart Apache
/Applications/XAMPP/xamppfiles/bin/apachectl restart

# Check Apache status
ps aux | grep httpd

# Check port 80 usage
lsof -i :80

# Fix file permissions
chmod -R 755 /Applications/XAMPP/xamppfiles/htdocs/cleva-front/
chmod -R 644 /Applications/XAMPP/xamppfiles/htdocs/cleva-front/*.html

# View error log
tail -f /Applications/XAMPP/xamppfiles/logs/error_log
```

---

**You're all set! Enjoy your Cleva hosting provider website.** 🚀
