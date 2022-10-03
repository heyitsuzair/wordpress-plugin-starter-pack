1. Please Update The composer.json (name,descritption,type,license,authors).

2. After Updating composer.json please run "composer update" with any terminal in your root directory.

3. After That You Need To Change The Filename "uzair-plugin.php" to the name of your "plugin folder", in my case it is uzair-plugin. It must match the folder name.

4. After Renaming "uzair-plugin.php" to your desired name. Please Update Its Header Info (Plugin Name, Plugin Uri, Description, Version etc)

5. After Completing these steps. You can go to Pages Folder That Is In Includes Folder. There You Fill Find Some Code.

6. To Add Pages To Admin Menu you fill Find Function "public function setPages()". You can simply duplicate first array in "$this->pages" variable to add your own page.

7. To Add Pages To Admin Menu you fill Find Function "public function setSubPages()". You can simply duplicate first array in "$this->subpages" variable to add your own subpage.

8. To Replace the First Submenu title from "Dashboard" To Your Desired Name, just Simple refer to "register()" function in Admin.php and replace "Dashboard" in withSubPage method chaining to your desired name "$this->settings->AddPages($this->pages)->withSubPage('Dashboard')->addSubPages($this->subpages)->register()"

9. To Add "CSS" or "JS" in your plugin, simply go to "includes/Base/enqueue.php" and find "enqueue()" function.

10. You Can Refer To "https://developer.wordpress.org/resource/dashicons/" to change icon of page and can replace it according to your needs.

11. To Perform Any Action On Plugin "Activation" please go to "includes/Base/activation.php". You will find "activate()" function. You Can Write Your Own Desired Code In That

12. To Perform Any Action On Plugin "Deactivation" please go to "includes/Base/deactivation.php". You will find "deactivate()" function. You Can Write Your Own Desired Code In That

13. To Access Plugin "path,url,basename" globally, simply extend your class with BaseController Class That You Can Find In "includes/Base/BaseController.php"

14. To Perform Any Action On "Uninstall" Go To "uninstall.php" in root directory and write your desired code

15. Please Enable "WP_DEBUG" to true in "wp_config.php" in your parent root directory to see errors if there are any.

If You Need Any Assistance, Get Back To Be On My Linkedin Account "uzair-dev".

Made With :heart: By UZAIR.