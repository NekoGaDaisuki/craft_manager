$(document).ready(function() {
	var root = $('#craft_form');
	var last = $('#submit_field');

	var weapons_count = -1;
	$('#weapons_check').on('click', function() {
		if (weapons_count == -1) {
			weapons_count++;
			var clone = $('#weapons_div').clone(true);
			clone.attr('id', 'weapons_div_node');
			last.before(clone);
			$('#weapons_div_node #weapons_fieldset').children('#weapon_div').remove();
		} else {
			weapons_count = -1;
			document.getElementById('weapons_div_node').remove();
		}
	});
	$('#weapons_add_button').on('click', function() {
		weapons_count++;
		var clone = $('#weapons_div #weapons_fieldset #weapon_div').clone(true);
		clone.attr('id', 'weapon_div'.concat(weapons_count));
		clone.insertBefore('#weapons_div_node #weapons_fieldset #weapons_button_div');
	});

	var armors_count = -1;
	$('#armors_check').on('click', function() {
		if (armors_count == -1) {
			armors_count++;
			var clone = $('#armors_div').clone(true);
			clone.attr('id', 'armors_div_node');
			last.before(clone);
			$('#armors_div_node #armors_fieldset').children('#armor_div').remove();
		} else {
			armors_count = -1;
			document.getElementById('armors_div_node').remove();
		}
	});
	$('#armors_add_button').on('click', function() {
		armors_count++;
		var clone = $('#armors_div #armors_fieldset #armor_div').clone(true);
		clone.attr('id', 'armor_div'.concat(armors_count));
		clone.insertBefore('#armors_div_node #armors_fieldset #armors_button_div');
	});

	var enchanting_count = -1;
	$('#enchanting_check').on('click', function() {
		if (enchanting_count == -1) {
			enchanting_count++;
			var clone = $('#enchanting_div').clone(true);
			clone.attr('id', 'enchanting_div_node');
			last.before(clone);
			$('#enchanting_div_node #enchanting_fieldset').children('#glyph_div').remove();
		} else {
			enchanting_count = -1;
			document.getElementById('enchanting_div_node').remove();
		}
	});
	$('#enchanting_add_button').on('click', function() {
		enchanting_count++;
		var clone = $('#enchanting_div #enchanting_fieldset #glyph_div').clone(true);
		clone.attr('id', 'glyph_div'.concat(enchanting_count));
		clone.insertBefore('#enchanting_div_node #enchanting_fieldset #enchanting_button_div');
	});

	var alchemy_count = -1;
	$('#alchemy_check').on('click', function() {
		if (alchemy_count == -1) {
			alchemy_count++;
			var clone = $('#alchemy_div').clone(true);
			clone.attr('id', 'alchemy_div_node');
			last.before(clone);
			$('#alchemy_div_node #alchemy_fieldset').children('#potion_div').remove();
		} else {
			alchemy_count = -1;
			document.getElementById('alchemy_div_node').remove();
		}
	});
	$('#alchemy_add_button').on('click', function() {
		alchemy_count++;
		var clone = $('#alchemy_div #alchemy_fieldset #potion_div').clone(true);
		clone.attr('id', 'potion_div'.concat(alchemy_count));
		clone.insertBefore('#alchemy_div_node #alchemy_fieldset #alchemy_button_div');
	});

	var cooking_count = -1;
	$('#cooking_check').on('click', function() {
		if (cooking_count == -1) {
			cooking_count++;
			var clone = $('#cooking_div').clone(true);
			clone.attr('id', 'cooking_div_node');
			last.before(clone);
			$('#cooking_div_node #cooking_fieldset').children('#food_div').remove();
		} else {
			cooking_count = -1;
			document.getElementById('cooking_div_node').remove();
		}
	});
	$('#cooking_add_button').on('click', function() {
		cooking_count++;
		var clone = $('#cooking_div #cooking_fieldset #food_div').clone(true);
		clone.attr('id', 'food_div'.concat(cooking_count));
		clone.insertBefore('#cooking_div_node #cooking_fieldset #cooking_button_div');
	});

	var brewery_count = -1;
	$('#brewery_check').on('click', function() {
		if (brewery_count == -1) {
			brewery_count++;
			var clone = $('#brewery_div').clone(true);
			clone.attr('id', 'brewery_div_node');
			last.before(clone);
			$('#brewery_div_node #brewery_fieldset').children('#drink_div').remove();
		} else {
			brewery_count = -1;
			document.getElementById('brewery_div_node').remove();
		}
	});
	$('#brewery_add_button').on('click', function() {
		brewery_count++;
		var clone = $('#brewery_div #brewery_fieldset #drink_div').clone(true);
		clone.attr('id', 'drink_div'.concat(brewery_count));
		clone.insertBefore('#brewery_div_node #brewery_fieldset #brewery_button_div');
	});
});
