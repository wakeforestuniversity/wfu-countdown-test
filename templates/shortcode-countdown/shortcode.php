<div class="countdown_shortcode">
    <script type="text/javascript">
        jQuery(document).ready(function ($) {
            $(document).ready(function () {
                const sCurrentDate = new Date();
                const sStartDate = new Date("<?php echo $start_date; ?>");
                const sEndDate = new Date("<?php echo $end_date; ?>");
                if (sStartDate <= sCurrentDate) {
                    $("#<?php echo $id; ?>_countdown").countdown({
                        <?php echo $function; ?>,
                        format: "<?php echo $format; ?>",
                        description: "<?php echo $description; ?>",
                        timezone: "<?php echo $timezone; ?>",
                        layout: "<?php echo $layout; ?>",
                        expiry_text: "<?php echo $expiry_text; ?>",
                        expiry_url: "<?php echo $expiry_url; ?>"
                });
                }
            });
        });
    </script>
    <div id="countdown_<?php echo $Id; ?>">
        <span id="<?php echo $Id; ?>_countdown" class="countdown"></span>
    </div>
</div>