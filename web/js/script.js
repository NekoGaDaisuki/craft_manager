function init_weapons_table()
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

function init_armors_table()
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

function init_enchanting_table()
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

function init_alchemy_table()
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
