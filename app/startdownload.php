<?php
require_once('bootstrap.php');

// Save download info
$stm = mysqli_prepare($con, "UPDATE downloads SET count=count+1, last_download=now() WHERE platform=?");
mysqli_stmt_bind_param($stm, 's', $query);
mysqli_stmt_execute($stm);

// Redirect to download url
switch ($query)
{
    case "windows32":
    case "windows64":
    case "windows":
        header("Location:http://ubuntuone.com/3LEZgDuNKWzeXjKyCdRLjS");
    break;

    case "windows_portable":
        header("Location:http://ubuntuone.com/4x1xLWcwUp1PUoMjsPzVam");
    break;

    case "debian32":
        header("Location:http://ubuntuone.com/2sFxn4217WOjzPcfAb61BB"); // i386.deb
    break;

    case "debian64":
        header("Location:http://ubuntuone.com/3bOdP7fqn1odPUpdlYWwkD"); // amd64.deb
    break;

    case "linux32":
        header("Location:http://ubuntuone.com/0sIViEha3icRLF6d1RAjHc"); // i386.tar.gz
    break;

    case "linux64":
        header("Location:http://ubuntuone.com/4Ssv7OlZ4ER9KluKW2dsn4"); // amd64.tar.gz
    break;

    case "os2":
        header("Location:http://qupzilla.com/uploads/qupzilla-1.6.1-os2.7z");
    break;

    case "haiku":
        header("Location:http://haikuware.com/directory/view-details/internet-network/web-browsers/qupzilla-140-march-2013");
    break;

    case "mac":
        header("Location:http://ubuntuone.com/7dpaT0xylFK81cgh1DMciY");
    break;

    case "viewsource":
        header("Location:https://github.com/QupZilla/qupzilla");
    break;

    case "source":
        header("Location:http://qupzilla.com/uploads/QupZilla-1.6.1.tar.gz");
    break;

    default:
        header("Location:https://github.com/QupZilla/qupzilla");
    break;
}
?>
