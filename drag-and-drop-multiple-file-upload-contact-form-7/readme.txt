=== Drag and Drop Multiple File Upload for Contact Form 7 ===
Contributors: glenwpcoder, yordansoares
Donate link : http://codedropz.com/donation
Tags: drag and drop, contact form 7, ajax uploader, multiple file, upload
Requires at least: 3.0.1
Tested up to: 6.7
Stable tag: 1.3.8.7
Requires PHP: 5.2.4
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

This simple plugin create Drag & Drop or choose Multiple File upload in your Confact Form 7 Forms.

== Description ==

**Drag and Drop Multiple File Upload** is a simple, straightforward WordPress plugin extension for Contact Form 7, which allows the user to upload multiple files using the **drag-and-drop** feature or the common browse-file of your webform.

Drag and Drop Multiple File Upload for Contact Form 7 is an independent plugin, not affiliated with or endorsed by the developers of Contact Form 7.

Here's a little [DEMO](http://codedropz.com/contact).

### Features

* File Type Validation
* File Size Validation
* Ajax Uploader
* Limit number of files Upload.
* Limit files size for each field
* Can specify custom file types or extension
* Manage Text and Error message in admin settings
* Drag & Drop or Browse File - Multiple Upload
* Support Multiple Drag and Drop in One Form.
* Able to delete uploaded file before being sent
* Send files as **email attachment** or as a **links**. *(see note below)*
* Support multiple languages
* Mobile Responsive
* Cool Progress Bar
* Compatible with any browser

**PLUGIN GUIDE - FREE VERSION**

[youtube https://www.youtube.com/watch?v=DvuvmzIImYo]

**Note:** On Free version, all uploaded files moves to a temporary folder *("/wp-content/uploads/wp_dndcf7_uploads")* then attaches the file to the mail and sends it. After that **"Drag & Drop File Upload"** removes the file from the temporary folder **1 hour** after the submission. *( same process with the default **"file"** upload of Contact Form 7 - [See here](https://contactform7.com/file-uploading-and-attachment/#How-your-uploaded-files-are-managed) )*

To **adjust** or **disable** the auto-deletion feature, we suggest upgrading to the **PRO version** for more options *(see below)*.

### ⭐ Premium Features ⭐

Check out the available features in the **PRO version**.

* **Image Preview** - Show Thumbnail for images
* Adjust **Auto Deletion** of Files - After Form Submission
  - *(1 hour, 4 hours, 8 hours , days, months etc)*
* Zip Files ( Compressed File )
* Save Files to **"Wordpress Media Library"**
* Change Wordpress Upload Directory
* Change **Upload Folder** To:
  - Contact Form 7 - Fields
  - Generated Date & Time - Timestamp
  - Random Folder
  - By User - Required Login
  - Custom Folder
  - Dynamic Folder - *user (name, id), post (id, slug), cf7 fields*
* Send as Individual Email Attachments, Zip Archive, or Links"
* Chunks Upload *( Break large files into smaller Chunks )*
  - Capable of uploading large files.
* set a Max Total Size *( of all Uploaded Files )*
* Parallel Upload *(No. of files that can be uploaded simultaneously)*
* Change **Filename Pattern** ({filename}, {cf7-field-name}, {ip_address}, {random}, {post_id}, {post_slug}, etc.)
* **New** - Color Options (File Size, Progress Bar, Filename, etc.)
* **New** - Disabled the Button to Prevent Duplicate Submissions"
* **New** - Image preview on email
* **New** - File Remote Storage *(OneDrive, Google Drive, Amazon S3, FTP, Dropbox)*
* **New** - Save **Form Entries** in the Admin
* **New** - Select "Dark" or "Light" Theme
* **New** - Validate Image Sizes (Width & Height)
* Able Resize Image (ie: 800x800) - **Standard** Version Only
* Automatically Optimizing Images (**Standard** Version Only)
* Enhanced Security (Updated Regularly)
* Code Optimization and Improved Performance

**Pro version** is also compatible with:

* Contact Form 7 Add-on – Arshid
* Database for Contact Form 7- Ninja
* Advanced Contact form 7 DB – Vsourz Digital

You can get [PRO Version here](https://www.codedropz.com/purchase-plugin/)!

**PRO VERSION - PLUGIN OVERVIEW**

[youtube https://youtu.be/PoQA4KmIETA?si=udM-70n6l4lsQAfp]

### Other Plugin You May Like

* [Drag & Drop Multiple File Upload - WPForms](https://www.codedropz.com/drag-drop-file-uploader-wpforms/)
An extension for **WPForms** - Transform your simple file upload into beautiful **"Drag & Drop Multiple File Upload"**.

* [Drag & Drop Multiple File Upload - WooCommerce](https://wordpress.org/plugins/drag-and-drop-multiple-file-upload-for-woocommerce/)
An extension for **WooCommerce** - Transform your simple file upload into beautiful **"Drag & Drop Multiple File Upload"**.

== Frequently Asked Questions ==

= How can I send feedback or get help with a bug? =

For any bug reports go to <a href="https://wordpress.org/support/plugin/drag-and-drop-multiple-file-upload-contact-form-7">Support</a> page.

= How can I limit file size? =

To limit file size in `multiple file upload` field generator under Contact Form 7, there's a field `File size limit (bytes)`.

You can also manually add limit parameter in existing [mfile] tag.

Example: *[mfile upload-file-433 limit:20971520]* - This limit the user to upload upto 20MB only.

Please take note it should be `Bytes` you may use any converter just Google (MB to Bytes converter) default of this plugin is 5MB(5242880 Bytes).

= How can I limit the number of files in my Upload? =

You can limit the number of files in your file upload by adding this parameter `max-file:3` to your shortcode :

Example: *[mfile upload-file-344 max-file:3]* - this option will limit the user to upload only 3 files.

= How can I Add or Limit file types =

You can add or change file types in cf7 Form-tag Generator Options by adding `jpeg|png|jpg|gif` in `Acceptable file types field`.

Example : *[mfile upload-file-433 filetypes:jpeg|png|jpg|gif]*

= How can I change text in Drag and Drop Uploading area? =

You can change text `Drag & Drop Files Here or Browse Files` text in Wordpress Admin menu under `Contact` > `Drag & Drop Upload`.

= How to Display Links in an Email =

Some email servers have limitations on file attachment sizes (e.g., Google allows a maximum of 20-25 MB). Attaching large files to emails can be problematic. Consider using this option to display links in the email instead of attaching the files.

Go to WP Admin `Contact -> Drag & Drop Upload` settings then check "Send Attachment as links?" option.

To manage mail template, go to Contact Forms edit specific form and Select `Mail` tab. In `Message Body` add generated code from [mfile]. ( Example Below )

Message Body : [your-message]

File Links 1 : [upload-file-754]
File Links2 : [upload-file-755]

Note : No need to add in `File Attachments` field.

See [Video Demonstration](https://www.youtube.com/watch?v=DvuvmzIImYo&t=232s)

= How to Attach Files to an Email =

1. In order to attach files to email you will need to check and make sure **"send as file(s) as links"** option is unchecked.
2. Go to Wordpress admin menu "Contact -> Edit {specific_form}" click or hover the cf7 form you want to edit.
3. In **"Edit Contact Form"** page click "Mail" tab and in the bottom you will see **"File attachments"** field, on this field add your upload field name (ie: **[upload-file-xxx]**), you will find the upload name in **"Form"** tab generated from `[mfile]` shortcode.
4. If attaching multiple files from a different file upload just add all the upload fields name. (see example below)
File attachments: `[upload-file-111] [upload-file-222]`

See [Video Demonstration](https://www.youtube.com/watch?v=DvuvmzIImYo&t=113s)

== Installation ==

To install this plugin see below:

1. Upload the plugin files to the `/wp-content/plugins/drag-and-drop-multiple-file-upload-contact-form-7.zip` directory, or install the plugin through the WordPress plugins screen directly.
2. Activate the plugin through the 'Plugins' screen in WordPress
3. Go to "Contact > Drag & Drop Upload" for the settings.
4. See [Tutorial](https://www.youtube.com/watch?v=DvuvmzIImYo)

== Screenshots ==

1. Generate Upload Field - Admin
2. Form Field Settings - Admin
3. Uploader Settings - Admin
4. Email Attachment- Gmail
5. Email Attachment As links - Gmail
6. Multiple Drag and Drop Fields - Front
7. Remote Storage - Pro Features

== Changelog ==

= 1.3.8.7 =
- Fixes - Header already sent issue[support](https://wordpress.org/support/topic/debug-php-warning-2/)
- Fixes - Unable to delete file when "send file(s) as link" enabled. [support](https://wordpress.org/support/topic/deleting-uploaded-files-is-not-working/)

= 1.3.8.6 =
- Fixes - Security Updates (fixed Vulnerability issue reported by Wordfence - CVE ID:CVE-2024-12267)
- Bug Fix - Fixed bug [Support Link](https://wordpress.org/support/topic/argument-1-value-must-be-of-type-countablearray-string-given/)
- Improvement - Added a random directory for each user/guest uploads to prevent file deletion across folders (related to item # 1)

= 1.3.8.5 =
- Hot fix ( Showing critical error on Php 7.3 and Up )
- Improvement - Improved I18N (Thanks to @alexclassroom)[Support Link](https://wordpress.org/support/topic/improve-i18n-issues-based-on-1-3-8-4/)

= 1.3.8.4 =
- Added Compatibility on Contact Form 7 6.0.
- Wordpress 6.7 Compatibility check.

= 1.3.8.3 =
- Bug - Fixed "send file(s) as links" option not creating year/month folder structure.

= 1.3.8.2 =
- Fixes - Show query error using Query Monitor plugin [Here](https://wordpress.org/support/topic/php-error-pops-up-via-query-monitor/)
- Added - JS/PHP hooks after successful upload [Here](https://wordpress.org/support/topic/javascript-jquery-event-to-trigger-successful-uploads/)
- Tweak - Move error message above files upload [Here](https://wordpress.org/support/topic/is-it-possible-to-move-the-error-message-location/)
- Fixes - Minor fixes and improvements

= 1.3.8.1 =
- Quick Fix - Unable to uncheck "Send file(s) as links" option.

= 1.3.8.0 =
- Quick fix to prevent auto-deletion if the "Don't delete files" setting was overridden by recent updates.

= 1.3.7.9 =
- Bug - Added back the "Don't delete files" option.
- Optimized -  Optimized plugin settings by saving them as an array instead of retrieving individual settings from the wp_options table.
- Compatibility check on latest version of Contact Form 7 5.9.5.

== Upgrade Notice ==

= 1.2.3 =
This version fixed minor issues/bugs and add multiple drag and drop fields in a form.

= 1.2.1 =
This version fixed minor issues and bugs.

= 1.2.2 =
Added some useful features.

= 1.2.4 =
Added new features and fixes.

== Donations ==

Would you like to support the advancement of this plugin? [Donate](http://codedropz.com/donation)