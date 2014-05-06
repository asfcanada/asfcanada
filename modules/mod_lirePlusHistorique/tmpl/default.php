<?php
/**
 * $mod_lirePlusHistorique
 * 
 * @version	1.0
 * @package	modules
 * @copyright	Copyright (C) Dec 2013 www.wesek.de All rights reserved.
 * @license	GNU General Public License version 2
 * -------------------------------------
 */
defined( '_JEXEC' ) or die;
$document = JFactory::getDocument();

$title 					= $params->get('title', 'Title');
$description 			= $params->get('description', 'Description');
$Directory 				= $params->get('Directory', '');
$link 					= $params->get('link', 'Link');
$picH 					= $params->get('pxHeight', 0);
$picW 					= $params->get('pxWidth', 0);
$textcolor 				= $params->get('textcolor', 0);
$bgcolor 				= $params->get('bgcolor', 0);
$WeSeK_moduleid         = $module->id ;
$readMore				= $params->get('readMore', 'ReadMore');
?>
<div class="lirePlusHistorique">
	<div class="lirePlusHistorique">
		<div class="readMore">                   
			<div class="mask">
				<!--<div class="jaune_trans"></div> -->
				<h2 class="newsHistorique1_h2"><?php echo $title; ?></h2>
				<div class="trait">
					<hr style="border: none;border-top: dashed 1px;background-color: #ffffff; ">
				</div>
				<p>
					<div class="lirePlus_img">
						<img src="<?php echo $Directory; ?>"/>
					</div>
					<div class="newsLirePlusHistorique_desc"><?php echo $description; ?></div>
				</p>
				
				<a href="<?php echo $link; ?>" class="info"></a>
				
			</div>
		</div>  
	</div>
	<a target="_blank" href="http://www.facebook.com/permalink.php?story_fbid=609123462512850&amp;id=171343846290816">
	<div class="plus bg_orange">+</div>
	</a>
</div>



