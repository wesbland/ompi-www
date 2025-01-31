<?
$subject_val = "Re: [OMPI users] EXTERNAL: Re:  Need advice on performance problem";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun 11 10:05:07 2013" -->
<!-- isoreceived="20130611140507" -->
<!-- sent="Tue, 11 Jun 2013 07:04:59 -0700" -->
<!-- isosent="20130611140459" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] EXTERNAL: Re:  Need advice on performance problem" -->
<!-- id="315F0933-1DA4-496A-AA35-D45032574CF9_at_open-mpi.org" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="25AE6277FDC12F408393C11ACE6C400F0CA156B3_at_HDXDSP53.us.lmco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] EXTERNAL: Re:  Need advice on performance problem<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-06-11 10:04:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22077.php">Jes�s Escudero Sahuquillo: "Re: [OMPI users] Using Service Levels (SLs) with OpenMPI 1.6.4 + MLNX_OFED 2.0"</a>
<li><strong>Previous message:</strong> <a href="22075.php">Blosch, Edwin L: "Re: [OMPI users] EXTERNAL: Re:  Need advice on performance problem"</a>
<li><strong>In reply to:</strong> <a href="22075.php">Blosch, Edwin L: "Re: [OMPI users] EXTERNAL: Re:  Need advice on performance problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22079.php">eblosch_at_[hidden]: "Re: [OMPI users] EXTERNAL: Re:  Need advice on performance problem"</a>
<li><strong>Reply:</strong> <a href="22079.php">eblosch_at_[hidden]: "Re: [OMPI users] EXTERNAL: Re:  Need advice on performance problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
If you run at 224 and things look okay, then I would suspect something in the upper level switch that spans cabinets. At that point, I'd have to leave it to Mellanox to advise.
<br>
<p><p>On Jun 11, 2013, at 6:55 AM, &quot;Blosch, Edwin L&quot; &lt;edwin.l.blosch_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I tried adding &quot;-mca btl openib,sm,self&quot;  but it did not make any difference.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Jesus&#146; e-mail this morning has got me thinking.  In our system, each cabinet has 224 cores, and we are reaching a different level of the system architecture when we go beyond 224.  I got an additional data point at 256 and found that performance is already falling off. Perhaps I did not build OpenMPI properly to support the Mellanox adapters that are used in the backplane, or I need some configuration setting similar to FAQ #19 in the Tuning/Openfabrics section.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On Behalf Of Ralph Castain
</span><br>
<span class="quotelev1">&gt; Sent: Sunday, June 09, 2013 6:48 PM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] EXTERNAL: Re: Need advice on performance problem
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Strange - it looks like a classic oversubscription behavior. Another possibility is that it isn't using IB for some reason when extended to the other nodes. What does your cmd line look like? Have you tried adding &quot;-mca btl openib,sm,self&quot; just to ensure it doesn't use TCP for some reason?
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; On Jun 9, 2013, at 4:31 PM, &quot;Blosch, Edwin L&quot; &lt;edwin.l.blosch_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Correct.  20 nodes, 8 cores per dual-socket on each node = 360.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On Behalf Of Ralph Castain
</span><br>
<span class="quotelev1">&gt; Sent: Sunday, June 09, 2013 6:18 PM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] EXTERNAL: Re: Need advice on performance problem
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; So, just to be sure - when you run 320 &quot;cores&quot;, you are running across 20 nodes?
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Just want to ensure we are using &quot;core&quot; the same way - some people confuse cores with hyperthreads.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; On Jun 9, 2013, at 3:50 PM, &quot;Blosch, Edwin L&quot; &lt;edwin.l.blosch_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 16.  dual-socket Xeon, E5-2670.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; I am trying a larger model to see if the performance drop-off happens at a different number of cores. 
</span><br>
<span class="quotelev1">&gt; Also I&#146;m running some intermediate core-count sizes to refine the curve a bit.
</span><br>
<span class="quotelev1">&gt; I also added mpi_show_mca_params all, and at the same time, btl_openib_use_eager_rdma 1, just to see if that does anything.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On Behalf Of Ralph Castain
</span><br>
<span class="quotelev1">&gt; Sent: Sunday, June 09, 2013 5:04 PM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users
</span><br>
<span class="quotelev1">&gt; Subject: EXTERNAL: Re: [OMPI users] Need advice on performance problem
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Looks to me like things are okay thru 160, and then things fall apart after that point. How many cores are on a node?
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; On Jun 9, 2013, at 1:59 PM, &quot;Blosch, Edwin L&quot; &lt;edwin.l.blosch_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I&#146;m having some trouble getting good scaling with OpenMPI 1.6.4 and I don&#146;t know where to start looking. This is an Infiniband FDR network with Sandy Bridge nodes.  I am using affinity (--bind-to-core) but no other options. As the number of cores goes up, the message sizes are typically going down. There seem to be lots of options in the FAQ, and I would welcome any advice on where to start.  All these timings are on a completely empty system except for me.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;     MPI              # cores   Ave. Rate   Std. Dev. %  # timings   Speedup    Efficiency
</span><br>
<span class="quotelev1">&gt; ================================================================================================
</span><br>
<span class="quotelev1">&gt; MVAPICH            |   16   |    8.6783  |   0.995 % |       2  |   16.000  |  1.0000
</span><br>
<span class="quotelev1">&gt; MVAPICH            |   48   |    8.7665  |   1.937 % |       3  |   47.517  |  0.9899
</span><br>
<span class="quotelev1">&gt; MVAPICH            |   80   |    8.8900  |   2.291 % |       3  |   78.095  |  0.9762
</span><br>
<span class="quotelev1">&gt; MVAPICH            |  160   |    8.9897  |   2.409 % |       3  |  154.457  |  0.9654
</span><br>
<span class="quotelev1">&gt; MVAPICH            |  320   |    8.9780  |   2.801 % |       3  |  309.317  |  0.9666
</span><br>
<span class="quotelev1">&gt; MVAPICH            |  480   |    8.9704  |   2.316 % |       3  |  464.366  |  0.9674
</span><br>
<span class="quotelev1">&gt; MVAPICH            |  640   |    9.0792  |   1.138 % |       3  |  611.739  |  0.9558
</span><br>
<span class="quotelev1">&gt; MVAPICH            |  720   |    9.1328  |   1.052 % |       3  |  684.162  |  0.9502
</span><br>
<span class="quotelev1">&gt; MVAPICH            |  800   |    9.1945  |   0.773 % |       3  |  755.079  |  0.9438
</span><br>
<span class="quotelev1">&gt; OpenMPI            |   16   |    8.6743  |   2.335 % |       2  |   16.000  |  1.0000
</span><br>
<span class="quotelev1">&gt; OpenMPI            |   48   |    8.7826  |   1.605 % |       2  |   47.408  |  0.9877
</span><br>
<span class="quotelev1">&gt; OpenMPI            |   80   |    8.8861  |   0.120 % |       2  |   78.093  |  0.9762
</span><br>
<span class="quotelev1">&gt; OpenMPI            |  160   |    8.9774  |   0.785 % |       2  |  154.598  |  0.9662
</span><br>
<span class="quotelev1">&gt; OpenMPI            |  320   |   12.0585  |  16.950 % |       2  |  230.191  |  0.7193
</span><br>
<span class="quotelev1">&gt; OpenMPI            |  480   |   14.8330  |   1.300 % |       2  |  280.701  |  0.5848
</span><br>
<span class="quotelev1">&gt; OpenMPI            |  640   |   17.1723  |   2.577 % |       3  |  323.283  |  0.5051
</span><br>
<span class="quotelev1">&gt; OpenMPI            |  720   |   18.2153  |   2.798 % |       3  |  342.868  |  0.4762
</span><br>
<span class="quotelev1">&gt; OpenMPI            |  800   |   19.3603  |   2.254 % |       3  |  358.434  |  0.4480
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
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-22076/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22077.php">Jes�s Escudero Sahuquillo: "Re: [OMPI users] Using Service Levels (SLs) with OpenMPI 1.6.4 + MLNX_OFED 2.0"</a>
<li><strong>Previous message:</strong> <a href="22075.php">Blosch, Edwin L: "Re: [OMPI users] EXTERNAL: Re:  Need advice on performance problem"</a>
<li><strong>In reply to:</strong> <a href="22075.php">Blosch, Edwin L: "Re: [OMPI users] EXTERNAL: Re:  Need advice on performance problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22079.php">eblosch_at_[hidden]: "Re: [OMPI users] EXTERNAL: Re:  Need advice on performance problem"</a>
<li><strong>Reply:</strong> <a href="22079.php">eblosch_at_[hidden]: "Re: [OMPI users] EXTERNAL: Re:  Need advice on performance problem"</a>
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
