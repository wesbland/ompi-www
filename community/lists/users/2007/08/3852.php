<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Aug 14 11:37:39 2007" -->
<!-- isoreceived="20070814153739" -->
<!-- sent="Tue, 14 Aug 2007 11:37:19 -0400" -->
<!-- isosent="20070814153719" -->
<!-- name="Durga Choudhury" -->
<!-- email="dpchoudh_at_[hidden]" -->
<!-- subject="Re: [OMPI users] libmpi.so.0 problem" -->
<!-- id="f869b68c0708140837j74d5eacbu9d2adab20c9f972c_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="2439ca350708140755i705f72a6j92572d7ebe5cd177_at_mail.gmail.com" -->
<!-- expires="-1" -->
<div class="center">
<table border="2" width="100%" class="links">
<tr>
<th><a href="date.php">Date view</a></th>
<th><a href="index.php">Thread view</a></th>
<th><a href="subject.php">Subject view</a></th>
<th><a href="author.php">Author view</a></th>
</tr>
</table>
</div>
<p class="headers">
<strong>From:</strong> Durga Choudhury (<em>dpchoudh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-08-14 11:37:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3853.php">Adams, Samuel D Contr AFRL/HEDR: "Re: [OMPI users] segmentation faults"</a>
<li><strong>Previous message:</strong> <a href="3851.php">jody: "Re: [OMPI users] mpirun hangs"</a>
<li><strong>In reply to:</strong> <a href="3850.php">Rodrigo Faccioli: "Re: [OMPI users] libmpi.so.0 problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3854.php">Tim Prins: "Re: [OMPI users] libmpi.so.0 problem"</a>
<li><strong>Reply:</strong> <a href="3854.php">Tim Prins: "Re: [OMPI users] libmpi.so.0 problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Did you export your variables? Otherwise the child shell that forks the MPI
<br>
process will not inherit it.
<br>
<p><p><p>On 8/14/07, Rodrigo Faccioli &lt;faccioli.postgresql_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks, Tim Prins for your email.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; However It did't resolve my problem.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I set the enviroment variable on my Kubuntu Linux:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; faccioli_at_faccioli-desktop:/usr/local/lib$
</span><br>
<span class="quotelev1">&gt; PATH=/usr/local/sbin:/usr/local/bin:/usr/sbin:/usr/bin:/sbin:/bin:/usr/games:/usr/local/bin
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; faccioli_at_faccioli-desktop:/usr/local/lib$ LD_LIBRARY_PATH=/usr/local/lib/
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Therefore, set command will display:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; BASH=/bin/bash
</span><br>
<span class="quotelev1">&gt; BASH_ARGC=()
</span><br>
<span class="quotelev1">&gt; BASH_ARGV=()
</span><br>
<span class="quotelev1">&gt; BASH_COMPLETION=/etc/bash_completion
</span><br>
<span class="quotelev1">&gt; BASH_COMPLETION_DIR=/etc/bash_completion.d
</span><br>
<span class="quotelev1">&gt; BASH_LINENO=()
</span><br>
<span class="quotelev1">&gt; BASH_SOURCE=()
</span><br>
<span class="quotelev1">&gt; BASH_VERSINFO=([0]=&quot;3&quot; [1]=&quot;2&quot; [2]=&quot;13&quot; [3]=&quot;1&quot; [4]=&quot;release&quot;
</span><br>
<span class="quotelev1">&gt; [5]=&quot;x86_64-pc-linux-gnu&quot;)
</span><br>
<span class="quotelev1">&gt; BASH_VERSION='3.2.13(1)-release'
</span><br>
<span class="quotelev1">&gt; COLORTERM=
</span><br>
<span class="quotelev1">&gt; COLUMNS=83
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; DBUS_SESSION_BUS_ADDRESS=unix:abstract=/tmp/dbus-C83Ve0QbQz,guid=e07c2bd483a99b50932d080046c199e9
</span><br>
<span class="quotelev1">&gt; DESKTOP_SESSION=default
</span><br>
<span class="quotelev1">&gt; DIRSTACK=()
</span><br>
<span class="quotelev1">&gt; DISPLAY=: 0.0
</span><br>
<span class="quotelev1">&gt; DM_CONTROL=/var/run/xdmctl
</span><br>
<span class="quotelev1">&gt; EUID=1000
</span><br>
<span class="quotelev1">&gt; GROUPS=()
</span><br>
<span class="quotelev1">&gt; GS_LIB=/home/faccioli/.fonts
</span><br>
<span class="quotelev1">&gt; GTK2_RC_FILES=/home/faccioli/.gtkrc-
</span><br>
<span class="quotelev1">&gt; 2.0-kde:/home/faccioli/.kde/share/config/gtkrc-2.0
</span><br>
<span class="quotelev1">&gt; GTK_RC_FILES=/etc/gtk/gtkrc:/home/faccioli/.gtkrc:/home/faccioli/.kde/share/config/gtkrc
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; HISTCONTROL=ignoreboth
</span><br>
<span class="quotelev1">&gt; HISTFILE=/home/faccioli/.bash_history
</span><br>
<span class="quotelev1">&gt; HISTFILESIZE=500
</span><br>
<span class="quotelev1">&gt; HISTSIZE=500
</span><br>
<span class="quotelev1">&gt; HOME=/home/faccioli
</span><br>
<span class="quotelev1">&gt; HOSTNAME=faccioli-desktop
</span><br>
<span class="quotelev1">&gt; HOSTTYPE=x86_64
</span><br>
<span class="quotelev1">&gt; IFS=$' \t\n'
</span><br>
<span class="quotelev1">&gt; KDE_FULL_SESSION=true
</span><br>
<span class="quotelev1">&gt; KDE_MULTIHEAD=false
</span><br>
<span class="quotelev1">&gt; KONSOLE_DCOP='DCOPRef(konsole-5587,konsole)'
</span><br>
<span class="quotelev1">&gt; KONSOLE_DCOP_SESSION='DCOPRef(konsole-5587,session-2)'
</span><br>
<span class="quotelev1">&gt; LANG=en_US.UTF-8
</span><br>
<span class="quotelev1">&gt; LD_LIBRARY_PATH=/usr/local/lib/
</span><br>
<span class="quotelev1">&gt; LESSCLOSE='/usr/bin/lesspipe %s %s'
</span><br>
<span class="quotelev1">&gt; LESSOPEN='| /usr/bin/lesspipe %s'
</span><br>
<span class="quotelev1">&gt; LINES=33
</span><br>
<span class="quotelev1">&gt; LOGNAME=faccioli
</span><br>
<span class="quotelev1">&gt; LS_COLORS='no=00:fi=00:di=01;34:ln=01;36:pi=40;33:so=01;35:do=01;35:bd=40;33;01:cd=40;33;01:or=40;31;01:su=37;41:sg=30;43:tw=30;42:ow=34;42:st=37;44:ex=01;32:*.tar=01;31:*.tgz=01;31:*.arj=01;31:*.taz=01;31:*.lzh=01;31:*.zip=01;31:*.z=01;31:*.Z=01;31:*.gz=01;31:*.bz2=01;31:*.deb=01;31:*.rpm=01;31:*.jar=01;31:*.jpg=01;35:*.jpeg=01;35:*.gif=01;35:*.bmp=01;35:*.pbm=01;35:*.pgm=01;35:*.ppm=01;35:*.tga=01;35:*.xbm=01;35:*.xpm=01;35:*.tif=01;35:*.tiff=01;35:*.png=01;35:*.mov=01;35:*.mpg=01;35:*.mpeg=01;35:*.avi=01;35:*.fli=01;35:*.gl=01;35:*.dl=01;35:*.xcf=01;35:*.xwd=01;35:*.flac=01;35:*.mp3=01;35:*.mpc=01;35:*.ogg=01;35:*.wav=01;35:'
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; MACHTYPE=x86_64-pc-linux-gnu
</span><br>
<span class="quotelev1">&gt; MAILCHECK=60
</span><br>
<span class="quotelev1">&gt; OLDPWD=/home/faccioli
</span><br>
<span class="quotelev1">&gt; OPTERR=1
</span><br>
<span class="quotelev1">&gt; OPTIND=1
</span><br>
<span class="quotelev1">&gt; OSTYPE=linux-gnu
</span><br>
<span class="quotelev1">&gt; PATH=/usr/local/sbin:/usr/local/bin:/usr/sbin:/usr/bin:/sbin:/bin:/usr/games:/usr/local/bin
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; PIPESTATUS=([0]=&quot;0&quot;)
</span><br>
<span class="quotelev1">&gt; PPID=5587
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Unfortunately,  when I execute mpirun a.out, the message I received is:
</span><br>
<span class="quotelev1">&gt; a.out:  error while loading shared libraries: libmpi.so.0 : cannot open
</span><br>
<span class="quotelev1">&gt; shared object file: No such file or directory
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 8/14/07, Tim Prins &lt; tprins_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; You need to set your LD_LIBRARY_PATH. See these FAQ entries:
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/faq/?category=running#run-prereqs">http://www.open-mpi.org/faq/?category=running#run-prereqs</a>
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/faq/?category=running#adding-ompi-to-path">http://www.open-mpi.org/faq/?category=running#adding-ompi-to-path</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Tim
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Rodrigo Faccioli wrote:
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Hi,
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; I need to know what I can resolve my problem. I'm starting my study on
</span><br>
<span class="quotelev3">&gt; &gt; &gt; mpi, more specificaly open-mpi.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; But, when I execute mpirun a.out, the message I received is: a.out:
</span><br>
<span class="quotelev3">&gt; &gt; &gt; error while loading shared libraries: libmpi.so.0: cannot open shared
</span><br>
<span class="quotelev3">&gt; &gt; &gt; object file: No such file or directory
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; The a.out file was obtained through mpicc hello.c
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Thanks.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt; &gt; users mailing list
</span><br>
<span class="quotelev3">&gt; &gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Its a battle between humans and communists;
Which side are you in?
.
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-3852/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3853.php">Adams, Samuel D Contr AFRL/HEDR: "Re: [OMPI users] segmentation faults"</a>
<li><strong>Previous message:</strong> <a href="3851.php">jody: "Re: [OMPI users] mpirun hangs"</a>
<li><strong>In reply to:</strong> <a href="3850.php">Rodrigo Faccioli: "Re: [OMPI users] libmpi.so.0 problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3854.php">Tim Prins: "Re: [OMPI users] libmpi.so.0 problem"</a>
<li><strong>Reply:</strong> <a href="3854.php">Tim Prins: "Re: [OMPI users] libmpi.so.0 problem"</a>
<!-- reply="end" -->
</ul>
<div class="center">
<table border="2" width="100%" class="links">
<tr>
<th><a href="date.php">Date view</a></th>
<th><a href="index.php">Thread view</a></th>
<th><a href="subject.php">Subject view</a></th>
<th><a href="author.php">Author view</a></th>
</tr>
</table>
</div>
<!-- trailer="footer" -->
<? include("../../include/msg-footer.inc") ?>
