#!/bin/sh

## https://www.linuxtechi.com/rsync-command-examples-linux/
# -v, –verbose                             Verbose output
# -a, –archive                              archive files and directory while synchronizing ( -a equal to following options -rlptgoD)
# -h, –human-readable            display the output numbers in a human-readable format
# –progress                                 show the sync progress during transfer
# -z, –compress                          compress file data during the transfer
# -r, –recursive                           sync files and directories recursively
# -u, –update  don’t copy the files from source to destination if destination files are newer
# -e, –rsh=COMMAND            mention the remote shell to use in rsync


# push
rsync -avhu -progress -e ssh ./public_html/. ideationlab@linux.oit.utk.edu:/home/idealtionlab/public_html/  