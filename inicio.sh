#!/bin/bash
DIR="C:\Users\Nacho\Desktop\Mantencion"
PFILE="$DIR/script"
PROC="$DIR/script"

OPCION=$1

case $OPCION in

start)
	if [-e $PFILE]; then
		echo "proceso $0 se esta ejecutando!..."
	else
		$PROC $DIR $PFILE &
		echo "proceso iniciado"
	fi
	;;
stop)
	if [-e $PFILE]; then
		kill -9 cat $PFILE
		echo "proceso terminado"
		rm $PFILE
	else
		echo "no se ha iniciado el proceso..."
	fi
	;;

status)
	echo "----Estado del servicio---->"
	if [-e $PFILE]; then
		echo "el proceso $0 esta corriendo"
	else
		echo "el proceso $0 esta cerrado"
	fi
	;;
restart)
	echo "----Reinicio el proceso---->"
	if [-e $PFILE]; then
		echo "Reiniciando el proceso"
		$PROC restart &
	else
		echo "el proceso no ha iniciado"
	fi
	;;

esac

