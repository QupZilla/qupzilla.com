<?php
require_once('bootstrap.php');

// Save download info
if ($con) {
    $stm = mysqli_prepare($con, "UPDATE downloads SET count=count+1, last_download=now() WHERE platform=?");
    mysqli_stmt_bind_param($stm, 's', $query);
    mysqli_stmt_execute($stm);
}

// Redirect to download url
switch ($query)
{
    case "windows":
    case "windows32":
        header("Location:https://github.com/QupZilla/qupzilla/releases/download/v2.2.3/QupZilla.2.2.3.Installer.exe");
    break;

    case "windows64":
        header("Location:https://github.com/QupZilla/qupzilla/releases/download/v2.2.3/QupZilla.2.2.3.x64.Installer.exe");
    break;

    case "windows_portable":
        header("Location:https://github.com/QupZilla/qupzilla/releases/download/v2.2.3/QupZilla.2.2.3.Portable.Installer.exe");
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

    case "appimage":
        header("Location:" . $qupzilla_downloads["appimage"]);
    break;

    case "os2":
        header("Location:" . $qupzilla_downloads["os2"]);
    break;

    case "haiku":
        header("Location:https://packages.haiku-os.org/haikuports/master/repo/x86_gcc2/current/packages/qupzilla_x86-1.8.6-1-x86_gcc2.hpkg");
    break;

    case "mac":
        header("Location:" . $qupzilla_downloads["mac"]);
    break;

    case "viewsource":
        header("Location:https://github.com/QupZilla/qupzilla");
    break;

    case "source":
        header("Location:https://github.com/QupZilla/qupzilla/releases/tag/v" . $qupzilla_version);
    break;

    default:
        header("Location:https://github.com/QupZilla/qupzilla");
    break;
}
?>
