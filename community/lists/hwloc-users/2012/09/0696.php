<?
$subject_val = "Re: [hwloc-users] Thread binding problem";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Sep  6 04:25:05 2012" -->
<!-- isoreceived="20120906082505" -->
<!-- sent="Thu, 06 Sep 2012 10:22:05 +0200" -->
<!-- isosent="20120906082205" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] Thread binding problem" -->
<!-- id="50485D2D.9040706_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CAJNPZUW+21mMX33duPP_oPTA8btyaKk3kYVXF3GE+zUPgAfQwA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [hwloc-users] Thread binding problem<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-09-06 04:22:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0697.php">Gabriele Fatigati: "Re: [hwloc-users] Thread binding problem"</a>
<li><strong>Previous message:</strong> <a href="0695.php">Gabriele Fatigati: "Re: [hwloc-users] Thread binding problem"</a>
<li><strong>In reply to:</strong> <a href="0695.php">Gabriele Fatigati: "Re: [hwloc-users] Thread binding problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0697.php">Gabriele Fatigati: "Re: [hwloc-users] Thread binding problem"</a>
<li><strong>Reply:</strong> <a href="0697.php">Gabriele Fatigati: "Re: [hwloc-users] Thread binding problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 06/09/2012 10:13, Gabriele Fatigati a &#233;crit :
<br>
<span class="quotelev1">&gt; Downsizing the array, up to 4GB, 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; valgrind gives many warnings reported in the attached file.
</span><br>
<p>Adding hwloc_topology_destroy() at the end of the file would likely
<br>
remove most of them.
<br>
<p>But that won't fix the problem since the leaks are small.
<br>
==28082== LEAK SUMMARY:
<br>
==28082==    definitely lost: 4,080 bytes in 3 blocks
<br>
==28082==    indirectly lost: 51,708 bytes in 973 blocks
<br>
==28082==      possibly lost: 304 bytes in 1 blocks
<br>
==28082==    still reachable: 1,786 bytes in 4 blocks
<br>
==28082==         suppressed: 0 bytes in 0 blocks
<br>
<p>I don't know where to look, sorry.
<br>
<p>Brice
<br>
<p><p><p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2012/9/6 Gabriele Fatigati &lt;g.fatigati_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &lt;mailto:g.fatigati_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Sorry,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     I used a wrong hwloc installation. Using the hwloc with the printf
</span><br>
<span class="quotelev1">&gt;     controls:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     mbind hwloc_linux_set_area_membind()  fails:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Error from HWLOC mbind: Cannot allocate memory 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     so this is the origin of bad allocation.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     I attach the right valgrind output
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     valgrind --track-origins=yes --log-file=output_valgrind
</span><br>
<span class="quotelev1">&gt;     --leak-check=full --tool=memcheck  --show-reachable=yes
</span><br>
<span class="quotelev1">&gt;     ./main_hybrid_bind_mem
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     2012/9/6 Gabriele Fatigati &lt;g.fatigati_at_[hidden]
</span><br>
<span class="quotelev1">&gt;     &lt;mailto:g.fatigati_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         Hi Brice, hi Jeff,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;         &gt;Can you add some printf inside hwloc_linux_set_area_membind()
</span><br>
<span class="quotelev1">&gt;         in src/topology-linux.c to see if ENOMEM comes from the mbind
</span><br>
<span class="quotelev2">&gt;         &gt;syscall or not?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         I added printf inside that function, but ENOMEM does not come
</span><br>
<span class="quotelev1">&gt;         from there.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;         &gt;Have you run your application through valgrind or another
</span><br>
<span class="quotelev1">&gt;         memory-checking debugger?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         I tried with valgrind :
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         valgrind --track-origins=yes --log-file=output_valgrind
</span><br>
<span class="quotelev1">&gt;         --leak-check=full --tool=memcheck  --show-reachable=yes
</span><br>
<span class="quotelev1">&gt;         ./main_hybrid_bind_mem
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         ==25687== Warning: set address range perms: large range
</span><br>
<span class="quotelev1">&gt;         [0x39454040, 0x2218d4040) (undefined)
</span><br>
<span class="quotelev1">&gt;         ==25687== 
</span><br>
<span class="quotelev1">&gt;         ==25687==     Valgrind's memory management: out of memory:
</span><br>
<span class="quotelev1">&gt;         ==25687==        newSuperblock's request for 4194304 bytes failed.
</span><br>
<span class="quotelev1">&gt;         ==25687==        34253180928 bytes have already been allocated.
</span><br>
<span class="quotelev1">&gt;         ==25687==     Valgrind cannot continue.  Sorry.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         I attach the full output. 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         The code dies also using OpenMP pure code. Very misteriously.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         2012/9/5 Jeff Squyres &lt;jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt;         &lt;mailto:jsquyres_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             On Sep 5, 2012, at 2:36 PM, Gabriele Fatigati wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;             &gt; I don't think is a simply out of memory since NUMA node
</span><br>
<span class="quotelev1">&gt;             has 48 GB, and I'm allocating just 8 GB.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             Mmm.  Probably right.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             Have you run your application through valgrind or another
</span><br>
<span class="quotelev1">&gt;             memory-checking debugger?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             I've seen cases of heap corruption lead to malloc
</span><br>
<span class="quotelev1">&gt;             incorrectly failing with ENOMEM.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             --
</span><br>
<span class="quotelev1">&gt;             Jeff Squyres
</span><br>
<span class="quotelev1">&gt;             jsquyres_at_[hidden] &lt;mailto:jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;             For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt;             <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             _______________________________________________
</span><br>
<span class="quotelev1">&gt;             hwloc-users mailing list
</span><br>
<span class="quotelev1">&gt;             hwloc-users_at_[hidden] &lt;mailto:hwloc-users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;             <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         -- 
</span><br>
<span class="quotelev1">&gt;         Ing. Gabriele Fatigati
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         HPC specialist
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         SuperComputing Applications and Innovation Department
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         Via Magnanelli 6/3, Casalecchio di Reno (BO) Italy
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         www.cineca.it &lt;<a href="http://www.cineca.it">http://www.cineca.it</a>&gt;                    Tel:  
</span><br>
<span class="quotelev1">&gt;         +39 051 6171722 &lt;tel:%2B39%20051%206171722&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         g.fatigati [AT] cineca.it &lt;<a href="http://cineca.it">http://cineca.it</a>&gt;          
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     -- 
</span><br>
<span class="quotelev1">&gt;     Ing. Gabriele Fatigati
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     HPC specialist
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     SuperComputing Applications and Innovation Department
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Via Magnanelli 6/3, Casalecchio di Reno (BO) Italy
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     www.cineca.it &lt;<a href="http://www.cineca.it">http://www.cineca.it</a>&gt;                    Tel:   +39
</span><br>
<span class="quotelev1">&gt;     051 6171722 &lt;tel:%2B39%20051%206171722&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     g.fatigati [AT] cineca.it &lt;<a href="http://cineca.it">http://cineca.it</a>&gt;          
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Ing. Gabriele Fatigati
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; HPC specialist
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; SuperComputing Applications and Innovation Department
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Via Magnanelli 6/3, Casalecchio di Reno (BO) Italy
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; www.cineca.it &lt;<a href="http://www.cineca.it">http://www.cineca.it</a>&gt;                    Tel:   +39 051
</span><br>
<span class="quotelev1">&gt; 6171722
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; g.fatigati [AT] cineca.it &lt;<a href="http://cineca.it">http://cineca.it</a>&gt;          
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; hwloc-users mailing list
</span><br>
<span class="quotelev1">&gt; hwloc-users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-users/att-0696/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0697.php">Gabriele Fatigati: "Re: [hwloc-users] Thread binding problem"</a>
<li><strong>Previous message:</strong> <a href="0695.php">Gabriele Fatigati: "Re: [hwloc-users] Thread binding problem"</a>
<li><strong>In reply to:</strong> <a href="0695.php">Gabriele Fatigati: "Re: [hwloc-users] Thread binding problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0697.php">Gabriele Fatigati: "Re: [hwloc-users] Thread binding problem"</a>
<li><strong>Reply:</strong> <a href="0697.php">Gabriele Fatigati: "Re: [hwloc-users] Thread binding problem"</a>
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
