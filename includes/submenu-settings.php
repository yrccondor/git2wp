<?php
/**
 * Settings page
 * @author Axton
 */
?>
<div class="wrap">
<div class="ascii"> _____           _     _____          _______  
|  __ \         | |   |__ | |        | |  __ \ 
| |__) |   _ ___| |__    ) \ \  /\  / /| |__) |
|  ___/ | | / __| '_ \  / / \ \/  \/ / |  ___/ 
| |   | |_| \__ \ | | |/ /__ \  /\  /  | |     
|_|    \__,_|___/_| |_|_____| \/  \/   |_|     </div>
<?php _e("Welcome. You can use CLI to manage your Push2WP settings. Trust me, this is way more efficient than using GUI.<br>Type '<strong>help</strong>' to get help.<br>For more information, go to <a href=\"https://doc.flyhigher.top/push2wp/\" target=\"_blank\">documentation</a>.", "ptw");?>
<br>
<span id="output"><br></span><span id="output-choise"><br></span><span class="input-choise" contenteditable="" spellcheck="false" autocomplete="off" autocorrect="off"></span>
<div id="input">><span class="input-text" contenteditable="" spellcheck="false" autocomplete="off" autocorrect="off"></span><span id="tip"></span></div>
</div>
<script>
    let phpContent = {
        "version": "<?php echo get_option('ptw_version')['version'];?>",
        "help": {
            "create": "<?php _e("creat a new webhook", "ptw");?>",
            "list": "<?php _e("list all webhooks", "ptw");?>",
            "remove": "<?php _e("remove a webhook by id", "ptw");?>",
            "pause": "<?php _e("pause/continue to response to webhooks", "ptw");?>",
            "log": "<?php _e("print latest 50 logs", "ptw");?>",
            "clear": "<?php _e("clear the screen", "ptw");?>",
            "help": "<?php _e("display this help", "ptw");?>"
        },
        "remove": {
            "arg_needed": "<?php _e("An ID is needed. Please check your input.", "ptw");?>",
            "not_an_id": "<?php _e("Your input for ID is not an integer or too long. Please check your input.", "ptw");?>",
            "success": "<?php _e("The webhook below has been removed successfully.", "ptw");?>",
        },
        "warning": "<?php _e("Warning", "ptw");?>",
        "error": "<?php _e("Error", "ptw");?>",
        "done": "<?php _e("Done", "ptw");?>",
        "unknown_command": ["<?php _e("unknown command '", "ptw");?>", "<?php _e("'. Please check your input.", "ptw");?>"],
        "unknow_create": "<?php _e("unknown source or blank source. You can only choose github/gitlab/coding as your source.", "ptw");?>",
        "do_you_mean": ["<?php _e("Do you mean", "ptw");?>", "<?php _e("?", "ptw");?>"],
        "ignored": "<?php _e("redundant args ignored.", "ptw");?>",
        "command_error": "<?php _e("syntax error.", "ptw");?>"
    }
</script>
<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" id="filter-svg">
    <defs>
    <filter id="filter">
    <feTurbulence type="turbulence" baseFrequency="0.01 0.15" numOctaves="2" seed="5" stitchTiles="stitch" result="turbulence" />
    <feColorMatrix type="saturate" values="30" in="turbulence" result="colormatrix" />
    <feColorMatrix type="matrix" values="1 0 0 0 0
          0 1 0 0 0
          0 0 1 0 0
          0 0 0 150 -15" in="colormatrix" result="colormatrix1" />
    <feDisplacementMap in="SourceGraphic" in2="colormatrix1" scale="10" xChannelSelector="R" yChannelSelector="A" result="displacementMap" />
    </filter>
    </defs>
</svg>