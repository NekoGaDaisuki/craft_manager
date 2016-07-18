<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<title>Formulaire de demande de craft</title>
		<link rel="stylesheet" href="css/main.css" />
		<script src="js/jquery.js"></script>
		<script src="js/plugin.js"></script>
	</head>
	<body>
		<div id='template' style='display:none'>
			<?php $xml_equipment = simplexml_load_file('ressources/equipment.xml') or die('Error: Cannot create object'); ?>
			<div id='weapons_div'>
				<fieldset id='weapons_fieldset'>
					<legend>
						Arme(s)
					</legend>
					<div id='weapon_div'>
						Arme :
						<select class='weapon'>
							<optgroup label='Forge'>
								<?php
                                foreach ($xml_equipment->weapons->blacksmithing->children() as $weapon) {
                                    echo "<option>";
                                    echo $weapon -> name;
                                    echo "</option>";
                                    echo "\r\n";
                                }
								?>
							</optgroup>
							<optgroup label='Travail du Bois'>
								<?php
                                foreach ($xml_equipment->weapons->woodworking->children() as $weapon) {
                                    echo "<option>";
                                    echo $weapon -> name;
                                    echo "</option>";
                                    echo "\r\n";
                                }
								?>
							</optgroup>
						</select>
						Trait :
						<select class='trait'>
							<option>Aucun trait</option>
							<?php
                            foreach ($xml_equipment->traits->weaponsTraits->children() as $trait) {
                                echo "<option>";
                                echo $trait -> name;
                                echo "</option>";
                                echo "\r\n";
                            }
							?>
						</select>
						Niveau de l'arme :
						<select class='level'>
							<optgroup label='Niveau 1 - 50'>
								<option>Niveau 1</option>
								<option>Niveau 4</option>
								<option>Niveau 6</option>
								<option>Niveau 8</option>
								<option>Niveau 10</option>
								<option>Niveau 12</option>
								<option>Niveau 14</option>
								<option>Niveau 16</option>
								<option>Niveau 18</option>
								<option>Niveau 20</option>
								<option>Niveau 22</option>
								<option>Niveau 24</option>
								<option>Niveau 26</option>
								<option>Niveau 28</option>
								<option>Niveau 30</option>
								<option>Niveau 32</option>
								<option>Niveau 34</option>
								<option>Niveau 36</option>
								<option>Niveau 38</option>
								<option>Niveau 40</option>
								<option>Niveau 42</option>
								<option>Niveau 44</option>
								<option>Niveau 46</option>
								<option>Niveau 48</option>
								<option>Niveau 50</option>
							</optgroup>
							<optgroup label='Niveaux de Champion'>
								<option>Champion 10</option>
								<option>Champion 20</option>
								<option>Champion 30</option>
								<option>Champion 40</option>
								<option>Champion 50</option>
								<option>Champion 60</option>
								<option>Champion 70</option>
								<option>Champion 80</option>
								<option>Champion 90</option>
								<option>Champion 100</option>
								<option>Champion 110</option>
								<option>Champion 120</option>
								<option>Champion 130</option>
								<option>Champion 140</option>
								<option>Champion 150</option>
								<option>Champion 160</option>
							</optgroup>
						</select>
						Style de l'arme :
						<select class='style'>
							<optgroup label='Styles de base'>
								<?php
								?>
							</optgroup>
							<optgroup label='Styles rares'>
								<?php
								?>
							</optgroup>
							<optgroup label='Styles de Cyrodiil'>
								<?php
								?>
							</optgroup>
							<optgroup label="Styles d'Orsinium">
								<?php
								?>
							</optgroup>
							<optgroup label="Styles du Trépas des Cognées">
								<?php
								?>
							</optgroup>
							<optgroup label="Styles de la Côte d'or">
								<?php
								?>
							</optgroup>
						</select>
						Qualité de l'arme :
						<select class='quality'>
							<option>Basique</option>
							<option>Raffiné</option>
							<option>Supérieur</option>
							<option>Artefact</option>
							<option>Légendaire</option>
						</select>
					</div>
					<div class='row' id='weapons_button_div'>
						<input type='button' value='Ajouter une arme' id='weapons_add_button'>
					</div>
				</fieldset>
			</div><!-- weapons_div -->
			<div id='armors_div'>
				<fieldset id='armors_fieldset'>
					<legend>
						Armure(s)
					</legend>
					<div id='armor_div'>
						Armure :
						<select class='weapon'>
							<optgroup label='Couture (léger)'>
								<?php
                                foreach ($xml_equipment->armors->tailoring->light->children() as $armor) {
                                    echo "<option>";
                                    echo $armor -> name;
                                    echo "</option>";
                                    echo "\r\n";
                                }
								?>
							</optgroup>
							<optgroup label='Couture (moyen)'>
								<?php
                                foreach ($xml_equipment->armors->tailoring->medium->children() as $armor) {
                                    echo "<option>";
                                    echo $armor -> name;
                                    echo "</option>";
                                    echo "\r\n";
                                }
								?>
							</optgroup>
							<optgroup label='Forge (lourd)'>
								<?php
                                foreach ($xml_equipment->armors->blacksmithing->heavy->children() as $armor) {
                                    echo "<option>";
                                    echo $armor -> name;
                                    echo "</option>";
                                    echo "\r\n";
                                }
								?>
							</optgroup>
							<optgroup label='Travail du Bois'>
								<?php
                                foreach ($xml_equipment->armors->woodworking->children() as $armor) {
                                    echo "<option>";
                                    echo $armor -> name;
                                    echo "</option>";
                                    echo "\r\n";
                                }
								?>
							</optgroup>
						</select>
						Trait :
						<select class='trait'>
							<option>Aucun trait</option>
							<?php
                            foreach ($xml_equipment->traits->armorsTraits->children() as $trait) {
                                echo "<option>";
                                echo $trait -> name;
                                echo "</option>";
                                echo "\r\n";
                            }
							?>
						</select>
						Niveau de l'armure :
						<select class='level'>
							<optgroup label='Niveau 1 - 50'>
								<option>Niveau 1</option>
								<option>Niveau 4</option>
								<option>Niveau 6</option>
								<option>Niveau 8</option>
								<option>Niveau 10</option>
								<option>Niveau 12</option>
								<option>Niveau 14</option>
								<option>Niveau 16</option>
								<option>Niveau 18</option>
								<option>Niveau 20</option>
								<option>Niveau 22</option>
								<option>Niveau 24</option>
								<option>Niveau 26</option>
								<option>Niveau 28</option>
								<option>Niveau 30</option>
								<option>Niveau 32</option>
								<option>Niveau 34</option>
								<option>Niveau 36</option>
								<option>Niveau 38</option>
								<option>Niveau 40</option>
								<option>Niveau 42</option>
								<option>Niveau 44</option>
								<option>Niveau 46</option>
								<option>Niveau 48</option>
								<option>Niveau 50</option>
							</optgroup>
							<optgroup label='Niveaux de Champion'>
								<option>Champion 10</option>
								<option>Champion 20</option>
								<option>Champion 30</option>
								<option>Champion 40</option>
								<option>Champion 50</option>
								<option>Champion 60</option>
								<option>Champion 70</option>
								<option>Champion 80</option>
								<option>Champion 90</option>
								<option>Champion 100</option>
								<option>Champion 110</option>
								<option>Champion 120</option>
								<option>Champion 130</option>
								<option>Champion 140</option>
								<option>Champion 150</option>
								<option>Champion 160</option>
							</optgroup>
						</select>
						Style de l'armure :
						<select class='style'>
							<optgroup label='Styles de base'>
								<?php
								?>
							</optgroup>
							<optgroup label='Styles rares'>
								<?php
								?>
							</optgroup>
							<optgroup label='Styles de Cyrodiil'>
								<?php
								?>
							</optgroup>
							<optgroup label="Styles d'Orsinium">
								<?php
								?>
							</optgroup>
							<optgroup label="Styles du Trépas des Cognées">
								<?php
								?>
							</optgroup>
							<optgroup label="Styles de la Côte d'or">
								<?php
								?>
							</optgroup>
						</select>
						Qualité de l'armure :
						<select class='quality'>
							<option>Basique</option>
							<option>Raffiné</option>
							<option>Supérieur</option>
							<option>Artefact</option>
							<option>Légendaire</option>
						</select>
					</div>
					<div class='row' id='armors_button_div'>
						<input type='button' value='Ajouter une armure' id='armors_add_button'>
					</div>
				</fieldset>
			</div><!-- armors_div -->
			<div id='enchanting_div'>
				<fieldset id='enchanting_fieldset'>
					<legend>
						Glyphe(s)
					</legend>
					<div class='row' id='glyph_div'>
						<?php $xml_enchanting = simplexml_load_file('ressources/enchanting.xml') or die('Error: Cannot create object'); ?>
						Nom du glyphe :
						<select class="glyph">
							<optgroup label="Glyphe d'armure">
								<?php
                                foreach ($xml_enchanting->glyphs->armorGlyphs->children() as $glyph) {
                                    echo "<option>";
                                    echo $glyph -> label;
                                    echo "</option>";
                                    echo "\r\n";
                                }
								?>
							</optgroup>
							<optgroup label="Glyphe d'arme">
								<?php
                                foreach ($xml_enchanting->glyphs->weaponGlyphs->children() as $glyph) {
                                    echo "<option>";
                                    echo $glyph -> label;
                                    echo "</option>";
                                    echo "\r\n";
                                }
								?>
							</optgroup>
							<optgroup label="Glyphe de bijou">
								<?php
                                foreach ($xml_enchanting->glyphs->jewelryGlyphs->children() as $glyph) {
                                    echo "<option>";
                                    echo $glyph -> label;
                                    echo "</option>";
                                    echo "\r\n";
                                }
								?>
							</optgroup>
						</select>
						Niveau du glyphe :
						<select class="level">
							<optgroup label='Niveau 1 - 50'>
								<option>Niveau 1</option>
								<option>Niveau 4</option>
								<option>Niveau 6</option>
								<option>Niveau 8</option>
								<option>Niveau 10</option>
								<option>Niveau 12</option>
								<option>Niveau 14</option>
								<option>Niveau 16</option>
								<option>Niveau 18</option>
								<option>Niveau 20</option>
								<option>Niveau 22</option>
								<option>Niveau 24</option>
								<option>Niveau 26</option>
								<option>Niveau 28</option>
								<option>Niveau 30</option>
								<option>Niveau 32</option>
								<option>Niveau 34</option>
								<option>Niveau 36</option>
								<option>Niveau 38</option>
								<option>Niveau 40</option>
								<option>Niveau 42</option>
								<option>Niveau 44</option>
								<option>Niveau 46</option>
								<option>Niveau 48</option>
								<option>Niveau 50</option>
							</optgroup>
							<optgroup label='Niveaux de Champion'>
								<option>Champion 10</option>
								<option>Champion 20</option>
								<option>Champion 30</option>
								<option>Champion 40</option>
								<option>Champion 50</option>
								<option>Champion 60</option>
								<option>Champion 70</option>
								<option>Champion 80</option>
								<option>Champion 90</option>
								<option>Champion 100</option>
								<option>Champion 110</option>
								<option>Champion 120</option>
								<option>Champion 130</option>
								<option>Champion 140</option>
								<option>Champion 150</option>
								<option>Champion 160</option>
							</optgroup>
						</select>
						Qualité du glyphe :
						<select class='quality'>
							<option>Basique</option>
							<option>Raffiné</option>
							<option>Supérieur</option>
							<option>Artefact</option>
							<option>Légendaire</option>
						</select>
					</div>
					<div class='row' id='enchanting_button_div'>
						<input type='button' value='Ajouter un Glyphe' id='enchanting_add_button'>
					</div>
				</fieldset>
			</div><!-- enchanting_div -->
			<div id='alchemy_div'>
				<fieldset id='alchemy_fieldset'>
				    <legend>
				        Préparations alchimiques
				    </legend>
					<div class='row' id='potion_div'>
						<?php $xml_alchemy = simplexml_load_file("ressources/alchemy.xml") or die("Error: Cannot create object"); ?>
						Solvant/Huile :
						<select class="solvant">
							<optgroup label="Solvants (Niveau 1 - 50)">
								<?php
                                foreach ($xml_alchemy->solvents->lowLevel->children() as $solvent) {
                                    echo "<option>";
                                    echo $solvent -> name;
                                    echo " (Niveau ";
                                    echo $solvent -> level;
                                    echo ")</option>";
                                    echo "\r\n";
                                }
								?>
							</optgroup>
							<optgroup label="Solvants (Niveaux de Champion)">
								<?php
                                foreach ($xml_alchemy->solvents->highLevel->children() as $solvent) {
                                    echo "<option>";
                                    echo $solvent -> name;
                                    echo " (Champion ";
                                    echo $solvent -> level;
                                    echo ")</option>";
                                    echo "\r\n";
                                }
								?>
							</optgroup>
							<optgroup label="Huiles (Niveau 1 - 50)">
								<?php
                                foreach ($xml_alchemy->oils->lowLevel->children() as $oil) {
                                    echo "<option>";
                                    echo $oil -> name;
                                    echo " (Niveau ";
                                    echo $oil -> level;
                                    echo ")</option>";
                                    echo "\r\n";
                                }
								?>
							</optgroup>
							<optgroup label="Huiles (Niveaux de Champion)">
								<?php
                                foreach ($xml_alchemy->oils->highLevel->children() as $oil) {
                                    echo "<option>";
                                    echo $oil -> name;
                                    echo " (Champion ";
                                    echo $oil -> level;
                                    echo ")</option>";
                                    echo "\r\n";
                                }
								?>
							</optgroup>
						</select>
						Réactif 1 :
						<select class="firstReagent">
							<optgroup label="Botaniste">
								<?php
                                foreach ($xml_alchemy->reagents->botanist->children() as $reagent) {
                                    echo "<option>";
                                    echo $reagent -> name;
                                    echo "\r\n";
                                }
								?>
							</optgroup>
							<optgroup label="Toxicologue">
								<?php
                                foreach ($xml_alchemy->reagents->toxicologist->children() as $reagent) {
                                    echo "<option>";
                                    echo $reagent -> name;
                                    echo "\r\n";
                                }
								?>
							</optgroup>
						</select>
						Réactif 2 :
						<select class="secondReagent">
							<optgroup label="Botaniste">
								<?php
                                foreach ($xml_alchemy->reagents->botanist->children() as $reagent) {
                                    echo "<option>";
                                    echo $reagent -> name;
                                    echo "\r\n";
                                }
								?>
							</optgroup>
							<optgroup label="Toxicologue">
								<?php
                                foreach ($xml_alchemy->reagents->toxicologist->children() as $reagent) {
                                    echo "<option>";
                                    echo $reagent -> name;
                                    echo "\r\n";
                                }
								?>
							</optgroup>
						</select>
						Réactif 3 :
						<select class="thirdReagent">
							<optgroup label="Botaniste">
								<?php
                                foreach ($xml_alchemy->reagents->botanist->children() as $reagent) {
                                    echo "<option>";
                                    echo $reagent -> name;
                                    echo "\r\n";
                                }
								?>
							</optgroup>
							<optgroup label="Toxicologue">
								<?php
                                foreach ($xml_alchemy->reagents->toxicologist->children() as $reagent) {
                                    echo "<option>";
                                    echo $reagent -> name;
                                    echo "\r\n";
                                }
								?>
							</optgroup>
						</select>
					</div>
					<div class='row' id='alchemy_button_div'>
						<input type='button' value='Ajouter une préparation alchimique' id='alchemy_add_button'>
					</div>
				</fieldset>
			</div><!-- alchemy_div -->
			<div id='cooking_div'>
				<fieldset id='cooking_fieldset'>
					<legend>
						Nourriture
					</legend>
					<div id='food_div'>

					</div>
					<div class='row' id='cooking_button_div'>
						<input type='button' value='Ajouter un plat' id='cooking_add_button'>
					</div>
				</fieldset>
			</div><!-- cooking_div -->
			<div id='brewery_div'>
				<fieldset id='brewery_fieldset'>
					<legend>
						Rafraichissements
					</legend>
					<div id='drink_div'>

					</div>
					<div class='row' id='brewery_button_div'>
						<input type='button' value='Ajouter un raffraichissement' id='brewery_add_button'>
					</div>
				</fieldset>
			</div><!-- brewery_div -->
		</div>
		<!-- Template div end -->
		<form method='post' action='send_form.php' id='craft_form' onsubmit='return true;'>
			<fieldset id='user_field'>
				<legend>
					Votre User ID :
				</legend>
				<input type="text" />
			</fieldset>
			<br>
			<fieldset id='check_field'>
				<legend>
					Demande pour :
				</legend>
				<input type='checkbox' id='weapons_check'>
				Arme(s)</input>
				<input type='checkbox' id='armors_check'>
				Armure(s)</input>
				<br>
				<input type='checkbox' id='enchanting_check'>
				Glyphe(s)</input>
				<br>
				<input type='checkbox' id='alchemy_check'>
				Préparations alchimiques</input>
				<br>
				<input type='checkbox' id='cooking_check'>
				Nourriture</input>
				<input type='checkbox' id='brewery_check'>
				Raffraichissements
			</fieldset>
			<div id='submit_field'>
				<input type='submit' value='Envoyer' />
			</div>
		</form>
	</body>
</html>
