@ECHO OFF
setlocal DISABLEDELAYEDEXPANSION
SET BIN_TARGET=%~dp0/../pimcore/pimcore/bin/pimcore-install
php "%BIN_TARGET%" %*
