<?
$subject_val = "Re: [hwloc-devel] hwloc support added in Grid Engine / Grid	Scheduler";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr 13 13:32:07 2011" -->
<!-- isoreceived="20110413173207" -->
<!-- sent="Wed, 13 Apr 2011 19:32:02 +0200" -->
<!-- isosent="20110413173202" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] hwloc support added in Grid Engine / Grid	Scheduler" -->
<!-- id="4DA5DE12.8090903_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="BANLkTikr1SoUgX3VMD8-WkVQ=9pTnp9mPw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] hwloc support added in Grid Engine / Grid	Scheduler<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-04-13 13:32:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2142.php">Jeff Squyres: "Re: [hwloc-devel] hwloc support added in Grid Engine / Grid	Scheduler"</a>
<li><strong>Previous message:</strong> <a href="2140.php">Rayson Ho: "Re: [hwloc-devel] hwloc support added in Grid Engine / Grid Scheduler"</a>
<li><strong>In reply to:</strong> <a href="2140.php">Rayson Ho: "Re: [hwloc-devel] hwloc support added in Grid Engine / Grid Scheduler"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2142.php">Jeff Squyres: "Re: [hwloc-devel] hwloc support added in Grid Engine / Grid	Scheduler"</a>
<li><strong>Reply:</strong> <a href="2142.php">Jeff Squyres: "Re: [hwloc-devel] hwloc support added in Grid Engine / Grid	Scheduler"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Don't worry about the depth. Even if you have less levels of caches in
<br>
some parts of the machine, or no hyperthreading or whatever different,
<br>
we still build levels of identical objects. So you still get a
<br>
consistent depth for all cores, threads, sockets, and different levels
<br>
of caches. But obviously, you will see less objects when iterating
<br>
through levels within the &quot;smaller&quot; part of the machine.
<br>
<p>If you want to run some tests, I can generate a fake heterogeneous
<br>
topology as a XML file that hwloc would load through the HWLOC_XMLFILE
<br>
environment variable.
<br>
<p>Brice
<br>
<p><p><p><p><p>Le 13/04/2011 19:21, Rayson Ho a &#233;crit :
<br>
<span class="quotelev1">&gt; Many thanks Brice!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; And I have a question for the list -- if the machine has processors
</span><br>
<span class="quotelev1">&gt; that are not idential - ie. some &quot;processors&quot; have SMT (or HT)
</span><br>
<span class="quotelev1">&gt; enabled, and some don't even have this support in the hardware, then
</span><br>
<span class="quotelev1">&gt; what would the tree look like?? Or if the cache structure is different
</span><br>
<span class="quotelev1">&gt; among the &quot;processors&quot;, then would I still be able to use
</span><br>
<span class="quotelev1">&gt; hwloc_get_depth_type() to get a consistent depth while I am iterating
</span><br>
<span class="quotelev1">&gt; through the tree??
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So far, my code has only been tested on homogeneous machines.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Rayson
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Tue, Apr 12, 2011 at 4:21 PM, Brice Goglin &lt;Brice.Goglin_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; Added!
</span><br>
<span class="quotelev2">&gt;&gt; thanks!
</span><br>
<span class="quotelev2">&gt;&gt; Brice
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Le 12/04/2011 22:12, Rayson Ho a &#233;crit :
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Can someone please add &quot;Open Grid Scheduler&quot; to the list of &quot;...
</span><br>
<span class="quotelev3">&gt;&gt;&gt; software already benefit from hwloc or are being ported to it&quot; in the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; hwloc project homepage??
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Our homepage is:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://gridscheduler.sourceforge.net">http://gridscheduler.sourceforge.net</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (Open Grid Scheduler is a fork of Sun Grid Engine, in total there are
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 3 forks. And Oracle is still developing its own closed source
</span><br>
<span class="quotelev3">&gt;&gt;&gt; version!)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; We will update the project status at:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://gridscheduler.sourceforge.net/projects/hwloc/GridEnginehwloc.html">http://gridscheduler.sourceforge.net/projects/hwloc/GridEnginehwloc.html</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; We still need to fix a bug or 2, and then we will ship hwloc support
</span><br>
<span class="quotelev3">&gt;&gt;&gt; in SGE 6.2u5p3.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Rayson
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       
</span><br>
<span class="quotelev1">&gt; <a href="http://gridscheduler.sourceforge.net">http://gridscheduler.sourceforge.net</a>
</span><br>
<span class="quotelev1">&gt; <a href="http://sourceforge.net/projects/gridscheduler/">http://sourceforge.net/projects/gridscheduler/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; hwloc-devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; hwloc-devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; hwloc-devel mailing list
</span><br>
<span class="quotelev1">&gt; hwloc-devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel</a>
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2142.php">Jeff Squyres: "Re: [hwloc-devel] hwloc support added in Grid Engine / Grid	Scheduler"</a>
<li><strong>Previous message:</strong> <a href="2140.php">Rayson Ho: "Re: [hwloc-devel] hwloc support added in Grid Engine / Grid Scheduler"</a>
<li><strong>In reply to:</strong> <a href="2140.php">Rayson Ho: "Re: [hwloc-devel] hwloc support added in Grid Engine / Grid Scheduler"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2142.php">Jeff Squyres: "Re: [hwloc-devel] hwloc support added in Grid Engine / Grid	Scheduler"</a>
<li><strong>Reply:</strong> <a href="2142.php">Jeff Squyres: "Re: [hwloc-devel] hwloc support added in Grid Engine / Grid	Scheduler"</a>
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
