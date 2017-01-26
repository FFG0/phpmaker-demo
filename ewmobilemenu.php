<!-- Begin Main Menu -->
<?php

// Generate all menu items
$RootMenu->IsRoot = TRUE;
$RootMenu->AddMenuItem(1, "mmi_contact", $Language->MenuPhrase("1", "MenuText"), "contactlist.php", -1, "", TRUE, FALSE);
$RootMenu->Render();
?>
<!-- End Main Menu -->
