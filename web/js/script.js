function enable_alchemy_table()
{
    $("alchemy_add_button").on("click", function ()
    {
        addRow("alchemyDataTable");
    });
    $("alchemy_remove_button").on("click", function ()
    {
        deleteRow("alchemyDataTable");
    });
}

function enable_armors_table()
{
    $("#armors_add_button").on("click", function ()
    {
        addRow("armorsDataTable");
    });
    $("#armors_remove_button").on("click", function ()
    {
        deleteRow("armorsDataTable");
    });
}

function enable_checkboxes()
{
    $("#weapons_check").on("click", function ()
    {
        toggleDisplay("weaponsField");
    });
    $("#armors_check").on("click", function ()
    {
        toggleDisplay("armorsField");
    });
    $("#enchanting_check").on("click", function ()
    {
        toggleDisplay("enchantingField");
    });
    $("#alchemy_check").on("click", function ()
    {
        toggleDisplay("alchemyField");
    });
}

function enable_enchanting_table()
{
    $("enchanting_add_button").on("click", function ()
    {
        addRow("enchantingDataTable");
    });
    $("enchanting_remove_button").on("click", function ()
    {
        deleteRow("enchantingDataTable");
    });
}

function enable_submit()
{
    $("#submit_button").on("submit", function ()
    {
        if (document.getElementById("weapons_check").checked)
        {
            document.getElementById("hidden_weapons_check").disabled = true;
        }

        if (document.getElementById("armors_check").checked)
        {
            document.getElementById("hidden_armors_check").disabled = true;
        }

        if (document.getElementById("enchanting_check").checked)
        {
            document.getElementById("hidden_enchanting_check").disabled = true;
        }

        if (document.getElementById("alchemy_check").checked)
        {
            document.getElementById("hidden_alchemy_check").disabled = true;
        }
    });
}

function enable_weapons_table()
{
    $("#weapons_add_button").on("click", function ()
    {
        addRow("weaponsDataTable");
    });

    $("#weapons_remove_button").on('click', function ()
    {
        deleteRow("weaponsDataTable");
    });
}
