#!/bin/sh
# This file was automatically generated
# by the pfSense service handler.

name="vpnbridge"
command="/usr/local/bin/vpnbridge"

piddir="/var/run/softether"
datadir="/cf/softether"
link_datadir="/var/db/softether"

precmd() {
    if [ ! -d "${piddir}" ]; then
        mkdir -p ${piddir}
    fi
    if [ ! -d "${datadir}" ]; then
        mkdir -p ${datadir}
    fi

    if [ ! -L "${link_datadir}" ]; then
        ln -s ${datadir} ${link_datadir}
    fi
}

rc_start() {
    precmd
    ${command} start &
}

rc_stop() {
    ${command} stop &
    sleep 2
    /usr/bin/killall ${name}
}

case $1 in
    start)
        rc_start
        ;;
    stop)
        rc_stop
        ;;
    restart)
        rc_stop
        rc_start
        ;;
esac

