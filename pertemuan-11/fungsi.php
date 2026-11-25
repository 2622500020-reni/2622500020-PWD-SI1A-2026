<?php
function bersihkan(string $teks)
{
    return htmlspecialchars($teks ?? "", ENT_QUOTES, "UTF-8");
}

function tebal(string $teks)
{
    return "<strong>" . bersihkan($teks) . "</strong>";
}
