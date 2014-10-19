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
        header("Location:http://qupzilla.com/uploads/qupzilla183.exe");
    break;

    case "windows_portable":
        header("Location:http://qupzilla.com/uploads/qupzilla183_portable.zip");
    break;

    case "debian32":
        header("Location:http://qupzilla.com/uploads/qupzilla_1.8.3_i386.deb");
    break;

    case "debian64":
        header("Location:http://qupzilla.com/uploads/qupzilla_1.8.3_amd64.deb");
    break;

    case "linux32":
        header("Location:http://qupzilla.com/uploads/qupzilla_1.8.3_i386.tar.xz");
    break;

    case "linux64":
        header("Location:http://qupzilla.com/uploads/qupzilla_1.8.3_amd64.tar.xz");
    break;

    case "os2":
        header("Location:http://qupzilla.com/uploads/qupzilla-1.8.2-os2.7z");
    break;

    case "haiku":
        header("Location:http://haikuware.com/directory/view-details/internet-network/web-browsers/qupzilla-140-march-2013");
    break;

    case "mac":
        header("Location:http://qupzilla.com/uploads/QupZilla-1.8.2.dmg");
    break;

    case "viewsource":
        header("Location:https://github.com/QupZilla/qupzilla");
    break;

    case "source":
        header("Location:https://github.com/QupZilla/qupzilla/releases/tag/v1.8.3");
    break;

    default:
        header("Location:https://github.com/QupZilla/qupzilla");
    break;
}
?>
