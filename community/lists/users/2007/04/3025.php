<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Apr  4 17:48:58 2007" -->
<!-- isoreceived="20070404214858" -->
<!-- sent="Wed, 4 Apr 2007 17:48:25 -0400" -->
<!-- isosent="20070404214825" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] problem with MPI_Bcast over etherne" -->
<!-- id="1BD8D4CA-BD46-47EA-895A-B31AAFE30A8F_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="696fd4820704041444m206222b5p56a0fac5c36e270d_at_mail.gmail.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-04-04 17:48:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3026.php">Jeff Stuart: "[OMPI users] problem with MPI_Bcast over etherne"</a>
<li><strong>Previous message:</strong> <a href="3024.php">Jeff Stuart: "Re: [OMPI users] problem with MPI_Bcast over etherne"</a>
<li><strong>In reply to:</strong> <a href="3024.php">Jeff Stuart: "Re: [OMPI users] problem with MPI_Bcast over etherne"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Can you send the information listed in this web page:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>
<br>
<p><p>On Apr 4, 2007, at 5:44 PM, Jeff Stuart wrote:
<br>
<p><span class="quotelev1">&gt; [stuart_at_cortex ~]$ mpirun -V
</span><br>
<span class="quotelev1">&gt; mpirun (Open MPI) 1.2
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 4/4/07, users-request_at_[hidden] &lt;users-request_at_[hidden]&gt;  
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Send users mailing list submissions to
</span><br>
<span class="quotelev2">&gt;&gt;         users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; To subscribe or unsubscribe via the World Wide Web, visit
</span><br>
<span class="quotelev2">&gt;&gt;         <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; or, via email, send a message with subject or body 'help' to
</span><br>
<span class="quotelev2">&gt;&gt;         users-request_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; You can reach the person managing the list at
</span><br>
<span class="quotelev2">&gt;&gt;         users-owner_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; When replying, please edit your Subject line so it is more specific
</span><br>
<span class="quotelev2">&gt;&gt; than &quot;Re: Contents of users digest...&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Today's Topics:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    1. Re: &quot;Address not mapped&quot; error on user defined MPI_OP
</span><br>
<span class="quotelev2">&gt;&gt;       function (Eric Thibodeau)
</span><br>
<span class="quotelev2">&gt;&gt;    2. MPI 1.2 stuck in pthread_condition_wait ( hpetit_at_[hidden] )
</span><br>
<span class="quotelev2">&gt;&gt;    3. Re: &quot;Address not mapped&quot; error on user defined MPI_OP
</span><br>
<span class="quotelev2">&gt;&gt;       function (Eric Thibodeau)
</span><br>
<span class="quotelev2">&gt;&gt;    4. Re: problem with MPI_Bcast over ethernet (Jeff Squyres)
</span><br>
<span class="quotelev2">&gt;&gt;    5. Re: btl_tcp_endpoint errors (Jeff Squyres)
</span><br>
<span class="quotelev2">&gt;&gt;    6. Re: problems with profile.d scripts generated using
</span><br>
<span class="quotelev2">&gt;&gt;       openmpi.spec (Jeff Squyres)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------- 
</span><br>
<span class="quotelev2">&gt;&gt; -
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Message: 1
</span><br>
<span class="quotelev2">&gt;&gt; Date: Wed, 4 Apr 2007 12:31:46 -0400
</span><br>
<span class="quotelev2">&gt;&gt; From: Eric Thibodeau &lt;kyron_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Subject: Re: [OMPI users] &quot;Address not mapped&quot; error on user defined
</span><br>
<span class="quotelev2">&gt;&gt;         MPI_OP  function
</span><br>
<span class="quotelev2">&gt;&gt; To: users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Message-ID: &lt;200704041231.46356.kyron_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Content-Type: text/plain; charset=&quot;iso-8859-1&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I completely forgot to mention which version of OpenMPI I am  
</span><br>
<span class="quotelev2">&gt;&gt; using, I'll gladly post additional info if required :
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; kyron_at_kyron ~/openmpi-1.2 $ ompi_info |head
</span><br>
<span class="quotelev2">&gt;&gt;                 Open MPI: 1.2
</span><br>
<span class="quotelev2">&gt;&gt;    Open MPI SVN revision: r14027
</span><br>
<span class="quotelev2">&gt;&gt;                 Open RTE: 1.2
</span><br>
<span class="quotelev2">&gt;&gt;    Open RTE SVN revision: r14027
</span><br>
<span class="quotelev2">&gt;&gt;                     OPAL: 1.2
</span><br>
<span class="quotelev2">&gt;&gt;        OPAL SVN revision: r14027
</span><br>
<span class="quotelev2">&gt;&gt;                   Prefix: /home/kyron/openmpi_i686
</span><br>
<span class="quotelev2">&gt;&gt;  Configured architecture: i686-pc-linux-gnu
</span><br>
<span class="quotelev2">&gt;&gt;            Configured by: kyron
</span><br>
<span class="quotelev2">&gt;&gt;            Configured on: Wed Apr  4 10:21:34 EDT 2007
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Le mercredi 4 avril 2007 11:47, Eric Thibodeau a ?crit?:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hello all,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       First off, please excuse the attached code as I may be na?? 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ve in my attempts to implement my own MPI_OP.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       I am attempting to create my own MPI_OP to use with  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI_Allreduce. I have been able to find very little examples off  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the net of creating MPI_OPs. My present references are &quot;MPI The  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; complete reference Volume 1 2nd edition&quot; and some rather good  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; slides I found at <a href="http://www.mpi-hd.mpg.de/personalhomes/stiff/">http://www.mpi-hd.mpg.de/personalhomes/stiff/</a> 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI/ . I am attaching my &quot;proof of concept&quot; code which fails with:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [kyron:14074] *** Process received signal ***
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [kyron:14074] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [kyron:14074] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [kyron:14074] Failing at address: 0x801da600
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [kyron:14074] [ 0] [0x6ffa6440]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [kyron:14074] [ 1] /home/kyron/openmpi_i686/lib/openmpi/ 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mca_coll_tuned.so 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (ompi_coll_tuned_allreduce_intra_recursivedoubling+0x700)  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [0x6fbb0dd0]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [kyron:14074] [ 2] /home/kyron/openmpi_i686/lib/openmpi/ 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mca_coll_tuned.so(ompi_coll_tuned_allreduce_intra_dec_fixed+0xb2)  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [0x6fbae9a2]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [kyron:14074] [ 3] /home/kyron/openmpi_i686/lib/libmpi.so.0 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (PMPI_Allreduce+0x1a6) [0x6ff61e86]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [kyron:14074] [ 4] AllReduceTest(main+0x180) [0x8048ee8]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [kyron:14074] [ 5] /lib/libc.so.6(__libc_start_main+0xe3)  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [0x6fcbd823]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [kyron:14074] *** End of error message ***
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Eric Thibodeau
</span><br>
<span class="quotelev2">&gt;&gt; -------------- next part --------------
</span><br>
<span class="quotelev2">&gt;&gt; HTML attachment scrubbed and removed
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Message: 2
</span><br>
<span class="quotelev2">&gt;&gt; Date: Wed,  4 Apr 2007 18:50:38 +0200
</span><br>
<span class="quotelev2">&gt;&gt; From: &quot; hpetit_at_[hidden] &quot; &lt;hpetit_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Subject: [OMPI users] MPI 1.2 stuck in pthread_condition_wait
</span><br>
<span class="quotelev2">&gt;&gt; To: &quot; users &quot; &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Message-ID: &lt;JFZG4E$41584250C17E66D5AFE2EAFA16558974_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Content-Type: text/plain; charset=iso-8859-1
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I have a problem of MPI 1.2.0rc being locked in a  
</span><br>
<span class="quotelev2">&gt;&gt; &quot;pthread_condition_wait&quot; call.
</span><br>
<span class="quotelev2">&gt;&gt; This happen whatever the application when openmpi has been  
</span><br>
<span class="quotelev2">&gt;&gt; compiled with multi-thread support.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The full &quot;configure&quot; options are
</span><br>
<span class="quotelev2">&gt;&gt; &quot;./configure --prefix=/usr/local/Mpi/openmpi-1.2 --enable-mpi-threads
</span><br>
<span class="quotelev2">&gt;&gt; --enable-progress-threads --with-threads=posix --enable-smp-lock&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; An example of GDB session is provided here below:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------- 
</span><br>
<span class="quotelev2">&gt;&gt; ----------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; GNU gdb 6.3-debian
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Copyright 2004 Free Software Foundation, Inc.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; GDB is free software, covered by the GNU General Public License, and
</span><br>
<span class="quotelev3">&gt;&gt;&gt; you are welcome to change it and/or distribute copies of it under  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; certain
</span><br>
<span class="quotelev3">&gt;&gt;&gt; conditions.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Type &quot;show copying&quot; to see the conditions.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; There is absolutely no warranty for GDB. Type &quot;show warranty&quot; for
</span><br>
<span class="quotelev3">&gt;&gt;&gt; details.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This GDB was configured as &quot;i386-linux&quot;...Using host libthread_db
</span><br>
<span class="quotelev3">&gt;&gt;&gt; library &quot;/lib/tls/libthread_db.so.1&quot;.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (gdb) run -np 1 spawn6
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Starting program: /usr/local/openmpi-1.2.0/bin/mpirun -np 1 spawn6
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [Thread debugging using libthread_db enabled]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [New Thread 1076191360 (LWP 29006)]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [New Thread 1084808112 (LWP 29009)]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; main*******************************
</span><br>
<span class="quotelev3">&gt;&gt;&gt; main : Lancement MPI*
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Program received signal SIGINT, Interrupt.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [Switching to Thread 1084808112 (LWP 29009)]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 0x401f0523 in poll () from /lib/tls/libc.so.6
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (gdb) where
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #0 0x401f0523 in poll () from /lib/tls/libc.so.6
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #1 0x40081c7c in opal_poll_dispatch () from
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /usr/local/openmpi-1.2.0/lib/libopen-pal.so.0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #2 0x4007e4f1 in opal_event_base_loop () from
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /usr/local/openmpi-1.2.0/lib/libopen-pal.so.0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #3 0x4007e36b in opal_event_loop () from
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /usr/local/openmpi-1.2.0/lib/libopen-pal.so.0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #4 0x4007f423 in opal_event_run () from
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /usr/local/openmpi-1.2.0/lib/libopen-pal.so.0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #5 0x40115b63 in start_thread () from /lib/tls/libpthread.so.0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #6 0x401f918a in clone () from /lib/tls/libc.so.6
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (gdb) bt
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #0 0x401f0523 in poll () from /lib/tls/libc.so.6
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #1 0x40081c7c in opal_poll_dispatch () from
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /usr/local/openmpi-1.2.0/lib/libopen-pal.so.0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #2 0x4007e4f1 in opal_event_base_loop () from
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /usr/local/openmpi-1.2.0/lib/libopen-pal.so.0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #3 0x4007e36b in opal_event_loop () from
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /usr/local/openmpi-1.2.0/lib/libopen-pal.so.0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #4 0x4007f423 in opal_event_run () from
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /usr/local/openmpi-1.2.0/lib/libopen-pal.so.0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #5 0x40115b63 in start_thread () from /lib/tls/libpthread.so.0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #6 0x401f918a in clone () from /lib/tls/libc.so.6
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (gdb) info threads
</span><br>
<span class="quotelev3">&gt;&gt;&gt; * 2 Thread 1084808112 (LWP 29009) 0x401f0523 in poll () from
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /lib/tls/libc.so.6
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1 Thread 1076191360 (LWP 29006) 0x40118295 in
</span><br>
<span class="quotelev3">&gt;&gt;&gt; pthread_cond_wait@@GLIBC_2.3.2 () from /lib/tls/libpthread.so.0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (gdb) thread 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [Switching to thread 1 (Thread 1076191360 (LWP 29006))]#0 0x40118295
</span><br>
<span class="quotelev3">&gt;&gt;&gt; in pthread_cond_wait@@GLIBC_2.3.2 () from /lib/tls/libpthread.so.0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (gdb) bt
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #0 0x40118295 in pthread_cond_wait@@GLIBC_2.3.2 () from
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /lib/tls/libpthread.so.0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #1 0x0804cb68 in opal_condition_wait (c=0x8050e4c, m=0x8050e28) at
</span><br>
<span class="quotelev3">&gt;&gt;&gt; condition.h:64
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #2 0x0804a4fe in orterun (argc=4, argv=0xbffff844) at orterun.c:436
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #3 0x0804a046 in main (argc=4, argv=0xbffff844) at main.c:13
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (gdb) where
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #0 0x40118295 in pthread_cond_wait@@GLIBC_2.3.2 () from
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /lib/tls/libpthread.so.0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #1 0x0804cb68 in opal_condition_wait (c=0x8050e4c, m=0x8050e28) at
</span><br>
<span class="quotelev3">&gt;&gt;&gt; condition.h:64
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #2 0x0804a4fe in orterun (argc=4, argv=0xbffff844) at orterun.c:436
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #3 0x0804a046 in main (argc=4, argv=0xbffff844) at main.c:13
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------- 
</span><br>
<span class="quotelev2">&gt;&gt; ----------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I have read the other threads related to multi-threads support. I  
</span><br>
<span class="quotelev2">&gt;&gt; have understood that multi-thread support will not be a priority  
</span><br>
<span class="quotelev2">&gt;&gt; before the end of the year.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The thing is this locking stuff problem appeared only since 1.1.2  
</span><br>
<span class="quotelev2">&gt;&gt; openmpi release and as it is a locking problem, I was wondering if  
</span><br>
<span class="quotelev2">&gt;&gt; you could do an exception and try to analyse this one before the  
</span><br>
<span class="quotelev2">&gt;&gt; end of the year.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Herve
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; P.S.: my OS is a debian sarge
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ------------------------ ALICE C'EST ENCORE MIEUX AVEC CANAL+ LE  
</span><br>
<span class="quotelev2">&gt;&gt; BOUQUET ! ---------------
</span><br>
<span class="quotelev2">&gt;&gt; D?couvrez vite l'offre exclusive ALICEBOX et CANAL+ LE BOUQUET, en  
</span><br>
<span class="quotelev2">&gt;&gt; cliquant ici <a href="http://alicebox.fr">http://alicebox.fr</a>
</span><br>
<span class="quotelev2">&gt;&gt; Soumis ? conditions.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Message: 3
</span><br>
<span class="quotelev2">&gt;&gt; Date: Wed, 4 Apr 2007 13:32:15 -0400
</span><br>
<span class="quotelev2">&gt;&gt; From: Eric Thibodeau &lt;kyron_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Subject: Re: [OMPI users] &quot;Address not mapped&quot; error on user defined
</span><br>
<span class="quotelev2">&gt;&gt;         MPI_OP  function
</span><br>
<span class="quotelev2">&gt;&gt; To: users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Message-ID: &lt;200704041332.15575.kyron_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Content-Type: text/plain; charset=&quot;iso-8859-1&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; hehe...don't we all love it when a problem &quot;fixes&quot; itself. I was  
</span><br>
<span class="quotelev2">&gt;&gt; missing a line in my Type creation to realigne the elements  
</span><br>
<span class="quotelev2">&gt;&gt; correctly:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         // Displacement is RELATIVE to it's first structure element!
</span><br>
<span class="quotelev2">&gt;&gt;         for(i=2; i &gt;= 0; i--) Displacement[i] -= Displacement[0];
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'm attaching the functionnal code so that others can maybe see  
</span><br>
<span class="quotelev2">&gt;&gt; this one as an example ;)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Le mercredi 4 avril 2007 11:47, Eric Thibodeau a ?crit?:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hello all,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       First off, please excuse the attached code as I may be na?? 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ve in my attempts to implement my own MPI_OP.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       I am attempting to create my own MPI_OP to use with  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI_Allreduce. I have been able to find very little examples off  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the net of creating MPI_OPs. My present references are &quot;MPI The  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; complete reference Volume 1 2nd edition&quot; and some rather good  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; slides I found at <a href="http://www.mpi-hd.mpg.de/personalhomes/stiff/">http://www.mpi-hd.mpg.de/personalhomes/stiff/</a> 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI/ . I am attaching my &quot;proof of concept&quot; code which fails with:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [kyron:14074] *** Process received signal ***
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [kyron:14074] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [kyron:14074] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [kyron:14074] Failing at address: 0x801da600
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [kyron:14074] [ 0] [0x6ffa6440]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [kyron:14074] [ 1] /home/kyron/openmpi_i686/lib/openmpi/ 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mca_coll_tuned.so 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (ompi_coll_tuned_allreduce_intra_recursivedoubling+0x700)  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [0x6fbb0dd0]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [kyron:14074] [ 2] /home/kyron/openmpi_i686/lib/openmpi/ 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mca_coll_tuned.so(ompi_coll_tuned_allreduce_intra_dec_fixed+0xb2)  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [0x6fbae9a2]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [kyron:14074] [ 3] /home/kyron/openmpi_i686/lib/libmpi.so.0 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (PMPI_Allreduce+0x1a6) [0x6ff61e86]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [kyron:14074] [ 4] AllReduceTest(main+0x180) [0x8048ee8]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [kyron:14074] [ 5] /lib/libc.so.6(__libc_start_main+0xe3)  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [0x6fcbd823]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [kyron:14074] *** End of error message ***
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Eric Thibodeau
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Eric Thibodeau
</span><br>
<span class="quotelev2">&gt;&gt; Neural Bucket Solutions Inc.
</span><br>
<span class="quotelev2">&gt;&gt; -------------- next part --------------
</span><br>
<span class="quotelev2">&gt;&gt; A non-text attachment was scrubbed...
</span><br>
<span class="quotelev2">&gt;&gt; Name: AllReduceTest.c
</span><br>
<span class="quotelev2">&gt;&gt; Type: text/x-csrc
</span><br>
<span class="quotelev2">&gt;&gt; Size: 3170 bytes
</span><br>
<span class="quotelev2">&gt;&gt; Desc: not available
</span><br>
<span class="quotelev2">&gt;&gt; Url : <a href="http://www.open-mpi.org/MailArchives/users/attachments/">http://www.open-mpi.org/MailArchives/users/attachments/</a> 
</span><br>
<span class="quotelev2">&gt;&gt; 20070404/69383002/attachment.bin
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Message: 4
</span><br>
<span class="quotelev2">&gt;&gt; Date: Wed, 4 Apr 2007 15:16:56 -0400
</span><br>
<span class="quotelev2">&gt;&gt; From: Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Subject: Re: [OMPI users] problem with MPI_Bcast over ethernet
</span><br>
<span class="quotelev2">&gt;&gt; To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Message-ID: &lt;ECA5445B-727D-4E68-9917-BF9FBF323DD8_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Content-Type: text/plain; charset=US-ASCII; delsp=yes; format=flowed
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; There is nothing known in the current release that would cause this
</span><br>
<span class="quotelev2">&gt;&gt; (1.2).  What version are you using?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Apr 2, 2007, at 4:34 PM, Jeff Stuart wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; for some reason, i am getting intermittent process crashing in
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI_Bcast. i run my program, which distributes some data via lots
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (thousands or more ) of 64k MPI_Bcast calls. the program that is
</span><br>
<span class="quotelev3">&gt;&gt;&gt; crashing is fairly big, and it would take some time to widdle down a
</span><br>
<span class="quotelev3">&gt;&gt;&gt; small example program. i *am* willing to do this, i just wanted to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; make sure there wasnt an already known problem about this first.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; thanks in advance,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -jeff
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; Cisco Systems
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Message: 5
</span><br>
<span class="quotelev2">&gt;&gt; Date: Wed, 4 Apr 2007 15:28:14 -0400
</span><br>
<span class="quotelev2">&gt;&gt; From: Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Subject: Re: [OMPI users] btl_tcp_endpoint errors
</span><br>
<span class="quotelev2">&gt;&gt; To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Message-ID: &lt;BC6C67E2-1172-4B00-83A5-F5C9C3E0FA88_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Content-Type: text/plain; charset=US-ASCII; delsp=yes; format=flowed
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Apr 3, 2007, at 1:22 PM, Heywood, Todd wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ssh: connect to host blade45 port 22: No route to host
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [blade1:05832] ERROR: A daemon on node blade45 failed to start as
</span><br>
<span class="quotelev3">&gt;&gt;&gt; expected.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [blade1:05832] ERROR: There may be more information available from
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [blade1:05832] ERROR: the remote shell (see above).
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [blade1:05832] ERROR: The daemon exited unexpectedly with status 1.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [blade1:05832] [0,0,0] ORTE_ERROR_LOG: Timeout in file
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ../../../../orte/mca/pls/base/pls_base_orted_cmds.c at line 188
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [blade1:05832] [0,0,0] ORTE_ERROR_LOG: Timeout in file
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ../../../../../orte/mca/pls/rsh/pls_rsh_module.c at line 1187
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I can understand this arising from an ssh bottleneck, with a
</span><br>
<span class="quotelev3">&gt;&gt;&gt; timeout. So, a
</span><br>
<span class="quotelev3">&gt;&gt;&gt; question to the OMPI folks: could the &quot;no route to host&quot; (113)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; error in
</span><br>
<span class="quotelev3">&gt;&gt;&gt; btl_tcp_endpoint.c:572 also result from a timeout?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I think it *could*, but it's really an OS-level question.  OMPI is
</span><br>
<span class="quotelev2">&gt;&gt; simply reporting what errno is giving us back from a failed TCP
</span><br>
<span class="quotelev2">&gt;&gt; connect() API call.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The timeout shown in the error message above is really an ORTE
</span><br>
<span class="quotelev2">&gt;&gt; timeout, meaning that we waited for a daemon to start that didn't, so
</span><br>
<span class="quotelev2">&gt;&gt; we timed out and gave up.  It's on the &quot;to do&quot; list to recognize
</span><br>
<span class="quotelev2">&gt;&gt; quicker that an ssh failed (or any of the other starters failed --
</span><br>
<span class="quotelev2">&gt;&gt; SLURM/srun failures behaves similarly to ssh failures right now)
</span><br>
<span class="quotelev2">&gt;&gt; faster than a timeout, probably not until at least the 1.3 timeframe,
</span><br>
<span class="quotelev2">&gt;&gt; however.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; Cisco Systems
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Message: 6
</span><br>
<span class="quotelev2">&gt;&gt; Date: Wed, 4 Apr 2007 17:39:57 -0400
</span><br>
<span class="quotelev2">&gt;&gt; From: Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Subject: Re: [OMPI users] problems with profile.d scripts generated
</span><br>
<span class="quotelev2">&gt;&gt;         using   openmpi.spec
</span><br>
<span class="quotelev2">&gt;&gt; To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Message-ID: &lt;EE226B9A-FBDE-41EA-B9F5-71DDAB9FC312_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Content-Type: text/plain; charset=US-ASCII; delsp=yes; format=flowed
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Apr 4, 2007, at 8:44 AM, Marcin Dulak wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thank your for comments.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1) I'am using
</span><br>
<span class="quotelev3">&gt;&gt;&gt; GNU bash, version 3.00.15(1)-release (i686-redhat-linux-gnu)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; To see the problem with the original
</span><br>
<span class="quotelev3">&gt;&gt;&gt; eval &quot;set %{configure_options}&quot; I start the configure_options with
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -- in buildrpm.sh, like this: configure_options=&quot;--with-tm=/usr/
</span><br>
<span class="quotelev3">&gt;&gt;&gt; local FC=pgf90 F77=pgf90 CC=pgcc CXX=pgCC CFLAGS=-Msignextend
</span><br>
<span class="quotelev3">&gt;&gt;&gt; CXXFLAGS=-Msignextend --with-wrapper-cflags=-Msignextend --with-
</span><br>
<span class="quotelev3">&gt;&gt;&gt; wrapper-cxxflags=-Msignextend FFLAGS=-Msignextend FCFLAGS=-
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Msignextend --with-wrapper-fflags=-Msignextend --with-wrapper-
</span><br>
<span class="quotelev3">&gt;&gt;&gt; fcflags=-Msignextend&quot; Or to see the problem directly, I go to the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; shell: sh; set --w sh: set: --: invalid option set: usage: set [--
</span><br>
<span class="quotelev3">&gt;&gt;&gt; abefhkmnptuvxBCHP] [-o option] [arg ...]
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; (wow, my mail client really munged your formatting... :-\ )
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I see why I didn't run into this before.  I did all my testing within
</span><br>
<span class="quotelev2">&gt;&gt; the context of the OFED 1.2 installer, and we always pass in
</span><br>
<span class="quotelev2">&gt;&gt; configure_options that start with a token that does not start with
</span><br>
<span class="quotelev2">&gt;&gt; --.  Hence, &quot;set&quot; knew to ignore the -- prefixed options.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; So it looks like a slightly less intrusive fix would actually be to
</span><br>
<span class="quotelev2">&gt;&gt; use the following:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     eval &quot;set -- %{configure_options}&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 2) if (&quot;\$LD_LIBRARY_PATH&quot; !~ *%{_libdir}*) then is the only
</span><br>
<span class="quotelev3">&gt;&gt;&gt; possibility which works for me. I'am using tcsh 6.13.00 (Astron)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 2004-05-19 (i386-intel-linux) options
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 8b,nls,dl,al,kan,rh,color,dspm,filec If I use &quot;%{_libdir}&quot;, then
</span><br>
<span class="quotelev3">&gt;&gt;&gt; every time I source /opt/openmpi/1.2/bin/mpivars-1.2.csh a new
</span><br>
<span class="quotelev3">&gt;&gt;&gt; entry of opemnpi is prepended, so the LD_LIBRARY_PATH is growing.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The same if I use &quot;*%{_libdir}*&quot; it seems that with the double
</span><br>
<span class="quotelev3">&gt;&gt;&gt; quotes the shell despite the pattern comparison requested by !~
</span><br>
<span class="quotelev3">&gt;&gt;&gt; uses literal matching.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I just went and read the man page on this (should have done this
</span><br>
<span class="quotelev2">&gt;&gt; before): it says that the =~ and !~ operators are glob-style
</span><br>
<span class="quotelev2">&gt;&gt; matching.  So the * prefix and suffix is correct -- thanks for
</span><br>
<span class="quotelev2">&gt;&gt; pointing that out.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I was trying to use &quot;&quot; to protect multi-word strings, but I can't
</span><br>
<span class="quotelev2">&gt;&gt; seem to find a syntax that works for multi-word strings on the right
</span><br>
<span class="quotelev2">&gt;&gt; hand side.  Oh well; there's probably other stuff in OMPI that will
</span><br>
<span class="quotelev2">&gt;&gt; break if use you spaces in the prefix -- I'm ok with this for now.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'll fix up these in SVN.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 3) using setenv MANPATH %{_mandir}: (with the colon (:) included),
</span><br>
<span class="quotelev3">&gt;&gt;&gt; if I start from empty MANPATH
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; unsetenv MANPATH
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and run
</span><br>
<span class="quotelev3">&gt;&gt;&gt; source /opt/openmpi/1.2/bin/mpivars-1.2.csh
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I get
</span><br>
<span class="quotelev3">&gt;&gt;&gt; echo $MANPATH
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /opt/openmpi/1.2/man:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Right.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I tried to google for something like
</span><br>
<span class="quotelev3">&gt;&gt;&gt; also include the default MANPATHbut I cannot find anything. What is
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the meaning of this colon at the end?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I believe that I found this option long ago by trial and error in the
</span><br>
<span class="quotelev2">&gt;&gt; OSCAR project.  I just trolled through the man documentation right
</span><br>
<span class="quotelev2">&gt;&gt; now and [still] can't find it documented anywhere.  :-\
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The trailing : means &quot;put all the options listed in man.conf here&quot;.
</span><br>
<span class="quotelev2">&gt;&gt; If you don't do that, then the contents of MANPATH wholly replaces
</span><br>
<span class="quotelev2">&gt;&gt; what is listed in man.conf.  For example (I'm a C shell kind of guy):
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; # With no $MANPATH
</span><br>
<span class="quotelev2">&gt;&gt; shell% man ls
</span><br>
<span class="quotelev2">&gt;&gt; ...get ls man page...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; # Set MANPATH to a directory with no trailing :
</span><br>
<span class="quotelev2">&gt;&gt; shell% setenv MANPATH /opt/intel/9.1/man
</span><br>
<span class="quotelev2">&gt;&gt; shell% man icc
</span><br>
<span class="quotelev2">&gt;&gt; ...get icc man page...
</span><br>
<span class="quotelev2">&gt;&gt; shell% man ls
</span><br>
<span class="quotelev2">&gt;&gt; No manual entry for ls
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; # Set MANPATH to a directory with a trailing :
</span><br>
<span class="quotelev2">&gt;&gt; shell% setenv MANPATH /opt/intel/9.1/man:
</span><br>
<span class="quotelev2">&gt;&gt; shell% man icc
</span><br>
<span class="quotelev2">&gt;&gt; ...get icc man page...
</span><br>
<span class="quotelev2">&gt;&gt; shell% man ls
</span><br>
<span class="quotelev2">&gt;&gt; ...get ls man page...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks for the bug reports and your persistence!
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; Cisco Systems
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; End of users Digest, Vol 550, Issue 5
</span><br>
<span class="quotelev2">&gt;&gt; *************************************
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3026.php">Jeff Stuart: "[OMPI users] problem with MPI_Bcast over etherne"</a>
<li><strong>Previous message:</strong> <a href="3024.php">Jeff Stuart: "Re: [OMPI users] problem with MPI_Bcast over etherne"</a>
<li><strong>In reply to:</strong> <a href="3024.php">Jeff Stuart: "Re: [OMPI users] problem with MPI_Bcast over etherne"</a>
<!-- nextthread="start" -->
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
