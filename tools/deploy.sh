#!/usr/bin/env bash
projectName="Flexbones"
localUrl="http://localhost/websitename"
remoteUrl="http://staging.codebluedigital.com/websitename"
remoteUrlRelative="public_html"
remoteUrlPath="/home/websitename"
remoteMysqlDb="dbname"
remoteMysqlUser="username"
remoteMysqlPass="pa55w0rd"
remoteSshUsernameHost="username@varuna.uksrv.co.uk"
remoteSshPort="722"
buildFolder="build"
dbBackupName="websitename_"$(date +%Y%m%d_%H%M%S.sql)

# Debug colours
red='\033[0;31m'
green='\033[0;32m'
lightGreen='\033[1;32m'
lightBlue='\033[1;34m'
nc='\033[0m' # No Color

# Horizontal Rules
hr="======================================================"
hrThin="------------------------------------------------------"

# Array of remote SSH options
declare -a remoteSshOptions=(
    -p $remoteSshPort 
    $remoteSshUsernameHost 
)

# Array of remote SQL options
declare -a remoteSqlOptions=(
    -u $remoteMysqlUser 
    --password=$remoteMysqlPass 
    $remoteMysqlDb
)

# Array of remote SQL options
declare -a remoteRsyncOptions=(
    -az
    $(pwd)/$buildFolder/
    -e 'ssh -p 722'
    $remoteSshUsernameHost:$remoteUrlPath
)

# Prepare Export DB
# 
# Depends on WP-CLI being installed and setup in $PATH
# Takes 3 Args - 
# (1) Current db
# (2) New db
# (3) Export path
backup_database () {
    echo ""
    echo "${lightGreen}  Replacing [${lightBlue}$1${lightGreen}]"
    echo "  with [${lightBlue}$2${lightGreen}]${nc}"
    echo $hrThin
    #wp db export --tables=$(wp db tables --all-tables-with-prefix --format=csv)
    wp --quiet search-replace $1 $2 wp_* --export=$3
  
} 

# Array of files to ignore
declare -a backupOptions=(
    -av
    -q
    --exclude='.DS_Store' 
    --exclude='*.md' 
    --exclude='wp-config-local.php' 
    --exclude='.git' 
    --exclude='.gitignore' 
    --exclude='node_modules/' 
    --exclude='package.json' 
    --exclude='npm-debug.log' 
    --exclude=$buildFolder 
    --exclude='deploy.sh' 
)

echo $hr
echo ${lightGreen} $projectName "Deployment" ${nc}
echo $hr
echo ""
echo "${lightGreen}⚡ Local URL:  ${lightBlue} $localUrl"
echo "${lightGreen}⚡ Remote URL: ${lightBlue} $remoteUrl"
echo "${lightGreen}⚡ Remote Relative URL: ${lightBlue} $remoteUrlRelative"
echo "${lightGreen}⚡ Remote URL Path: ${lightBlue} $remoteUrlPath"
echo "${lightGreen}⚡ Remote Database Name: ${lightBlue} $remoteMysqlDb"
echo "${lightGreen}⚡ Remote MySQL Username: ${lightBlue} $remoteMysqlUser"
echo "${lightGreen}⚡ Remote SSH Username: ${lightBlue} $remoteSshUsernameHost"
echo "${lightGreen}⚡ Remote SSH Port ${lightBlue} $remoteSshPort"
echo "${lightGreen}⚡ Build Folder: ${lightBlue} $buildFolder"
echo "${lightGreen}⚡ Database Backup Name: ${lightBlue} $dbBackupName ${nc} "
echo ""
echo $hrThin
# Promt the user to check details 
read -p "Are you sure you are ready to deploy? Incorrect settings could do irreversible damage if the wrong server is deployed to. Are you sure you wish to continue? [Y/N]" -n 1 -r


if [[ ! $REPLY =~ ^[Yy]$ ]]
then
    exit 1
fi

# Run it!!!!!!!!
echo $hr
echo $lightBlue
echo '    ______          __                          '
echo '   / __/ /__  _  __/ /_  ____  ____  ___  _____ '
echo '  / /_/ / _ \| |/_/ __ \/ __ \/ __ \/ _ \/ ___/ '
echo ' / __/ /  __/>  </ /_/ / /_/ / / / /  __(__  )  '
echo '/_/ /_/____/_/|_/_.___/\____/_/ /_/\___/____/   '
echo '  ____/ /__  ____  / /___  __  __               '
echo ' / __  / _ \/ __ \/ / __ \/ / / /               '
echo '/ /_/ /  __/ /_/ / / /_/ / /_/ /                '
echo '\__,_/\___/ .___/_/\____/\__, /                 '
echo '         /_/            /____/                  '
echo $nc
echo $hr

echo "${lightGreen}⚡ Backing up files to [${lightBlue}/$buildFolder${lightGreen}]${nc}"

# backup the files using the backupOptions array
rsync "${backupOptions[@]}" $(pwd)/ $(pwd)/$buildFolder

echo $hrThin

echo "${lightGreen}⚡ Backing up Database to: [${lightBlue}/$buildFolder${lightGreen}]${nc}"

# change the DB paths
backup_database $localUrl $remoteUrl $buildFolder/$dbBackupName

echo "${lightGreen}⚡ Deploying files to server${nc}"

# Rsync the modified files over using array for options
rsync "${remoteRsyncOptions[@]}"

echo $hrThin

echo "${lightGreen}⚡ Migrating Database to: [${lightBlue}$remoteUrl${lightGreen}]${nc}"

# Update the database
# ssh ${remoteSshOptions[@]} "mysql -u $remoteMysqlUser --password=$remoteMysqlPass $remoteMysqlDb < $remoteUrlRelative/$dbBackupName"

echo $hrThin
