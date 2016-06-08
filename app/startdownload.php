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
        header("Location:/uploads/qupzilla201.exe");
    break;

    case "windows_portable":
        header("Location:/uploads/qupzilla201_portable.zip");
    break;

    case "debian32":
        header("Location:/uploads/qupzilla_1.8.9_i386.deb");
    break;

    case "debian64":
        header("Location:/uploads/qupzilla_1.8.9_amd64.deb");
    break;

    case "linux32":
        header("Location:/uploads/qupzilla_1.8.9_i386.tar.gz");
    break;

    case "linux64":
        header("Location:/uploads/qupzilla_1.8.9_amd64.tar.gz");
    break;

    case "os2":
        header("Location:/uploads/qupzilla-1.8.9-os2.7z");
    break;

    case "haiku":
        header("Location:https://depot.haiku-os.org/__pkgdownload/qupzilla_x86/haikuports/1/8/6/-/1/x86_gcc2/package.hpkg");
    break;

    case "mac":
        header("Location:/uploads/QupZilla-1.8.9.dmg");
    break;

    case "viewsource":
        header("Location:https://github.com/QupZilla/qupzilla");
    break;

    case "source":
        header("Location:https://github.com/QupZilla/qupzilla/releases/tag/v2.0.1");
    break;

    default:
        header("Location:https://github.com/QupZilla/qupzilla");
    break;
}
?>
