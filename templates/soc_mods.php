<script>
    $(document).ready(function() {
        $('#mod_list').DataTable({
            "dom": '<"wrapper"lfptip>',
            "responsive": true,
            "autoWidth": false
        });
    });
</script>

<style>
    .dataTables_wrapper {
        padding: 10px;
    }
</style>

<?php
    // promote form
    $fdiv = div(div(par("Promote a user to moderator"), "card-header bg-success text-white"), "card");
    $form = make_form("mod_panel.php?soc=".$soc["soc_name"]."&view=mods", "post", "form-inline");
    $form = add_field($form, "user_to_mod", "Username", true, "form-control");
    $form = add_field($form, "mod_reason", "Reason for promotion", true, "form-control");
    $form = add_button($form, "Mod", "btn btn-dark");
    $fdiv["children"][] = div(div($form, "form-group"), "card-body");

    echo to_html($fdiv);

    // demote form
    $fdiv = div(div(par("De-mod a user"), "card-header bg-danger text-white"), "card");
    $form = make_form("mod_panel.php?soc=".$soc["soc_name"]."&view=mods", "post", "form-inline");
    $form = add_field($form, "user_to_demod", "Username", true, "form-control");
    $form = add_field($form, "demod_reason", "Reason for demotion", true, "form-control");
    $form = add_button($form, "Demod", "btn btn-dark");
    $fdiv["children"][] = div(div($form, "form-group"), "card-body");

    echo to_html($fdiv);

    // mod list
    $table = div(div(par("Moderators"),  "card-header"), "card");
    $table["children"][] = make_table($mods, ["mod name", "promoted by", "time", "reason"], "table", "mod_list", [0, 1]);

    echo to_html($table);
?>
