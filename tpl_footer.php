<?php
/**
 * Template footer, included in the main and detail files
 */

// must be run from within DokuWiki
if (!defined('DOKU_INC')) die();
?>

<!-- ********** FOOTER ********** -->
<div id="dokuwiki__footer"><div class="pad">

	<div style="margin:25px;">
		<p style="margin:0px;">Advertisement</p>
		<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
			<!-- Datacore - Bottom -->
			<ins class="adsbygoogle"
				 style="display:inline-block;width:728px;height:90px"
				 data-ad-client="ca-pub-7134033472547187"
				 data-ad-slot="9453644858"></ins>
			<script>
				(adsbygoogle = window.adsbygoogle || []).push({});
			</script>
		</div>

	<p><a href="http://datacore.windbournecitizen.com/doku.php?id=wiki:privacy-policy">Privacy Policy</a><br/>All content from Cloud Imperium Games and from the Star Citizen official website is used with permission and is licensed under the license below</p>
		
    <?php tpl_license(''); // license text ?>

    <div class="buttons">
        <?php
            tpl_license('button', true, false, false); // license button, no wrapper
            $target = ($conf['target']['extern']) ? 'target="'.$conf['target']['extern'].'"' : '';
        ?>
        <a href="http://www.php.net" title="Powered by PHP" <?php echo $target?>><img
            src="<?php echo tpl_basedir(); ?>images/button-php.gif" width="80" height="15" alt="Powered by PHP" /></a>
        <a href="http://validator.w3.org/check/referer" title="Valid HTML5" <?php echo $target?>><img
            src="<?php echo tpl_basedir(); ?>images/button-html5.png" width="80" height="15" alt="Valid HTML5" /></a>
        <a href="http://jigsaw.w3.org/css-validator/check/referer?profile=css3" title="Valid CSS" <?php echo $target?>><img
            src="<?php echo tpl_basedir(); ?>images/button-css.png" width="80" height="15" alt="Valid CSS" /></a>
        <a href="http://dokuwiki.org/" title="Driven by DokuWiki" <?php echo $target?>><img
            src="<?php echo tpl_basedir(); ?>images/button-dw.png" width="80" height="15" alt="Driven by DokuWiki" /></a>
			
		<p>Theme remake by <a href="mailto:thebird956@gmail.com">Julien Stébenne</a> aka TheBird956</p>
		
		<a href="http://datacore.windbournecitizen.com/projecthoneypot/coralcontinuous.php" style="display: none;">dextrorse-teenage</a>
		
    </div>
</div></div><!-- /footer -->

<?php tpl_includeFile('footer.html') ?>
