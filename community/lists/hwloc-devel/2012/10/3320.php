<?
$subject_val = "Re: [hwloc-devel] Why doesn't my disk controller show up?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Oct  9 15:33:37 2012" -->
<!-- isoreceived="20121009193337" -->
<!-- sent="Tue, 09 Oct 2012 21:33:32 +0200" -->
<!-- isosent="20121009193332" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] Why doesn't my disk controller show up?" -->
<!-- id="50747C0C.20303_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="50747974.3070900_at_redhat.com" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] Why doesn't my disk controller show up?<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-10-09 15:33:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3321.php">Brice Goglin: "Re: [hwloc-devel] Why doesn't my disk controller show up?"</a>
<li><strong>Previous message:</strong> <a href="3319.php">Brice Goglin: "Re: [hwloc-devel] Why doesn't my disk controller show up?"</a>
<li><strong>In reply to:</strong> <a href="3318.php">Guy Streeter: "Re: [hwloc-devel] Why doesn't my disk controller show up?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3321.php">Brice Goglin: "Re: [hwloc-devel] Why doesn't my disk controller show up?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 09/10/2012 21:22, Guy Streeter a &#233;crit :
<br>
<span class="quotelev1">&gt; /sys/bus/pci/devices/0000:00:1f.2/ata1
</span><br>
<span class="quotelev1">&gt; /sys/bus/pci/devices/0000:00:1f.2/ata1/host0
</span><br>
<span class="quotelev1">&gt; /sys/bus/pci/devices/0000:00:1f.2/ata1/host0/scsi_host
</span><br>
<p>Ok, host0 was outside of ata1 in earlier kernels. That changed in 3.3
<br>
(commit 9a6d6a2ddabbd32c07f6a38b659e5f3db319fa5a).
<br>
I am working on it.
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3321.php">Brice Goglin: "Re: [hwloc-devel] Why doesn't my disk controller show up?"</a>
<li><strong>Previous message:</strong> <a href="3319.php">Brice Goglin: "Re: [hwloc-devel] Why doesn't my disk controller show up?"</a>
<li><strong>In reply to:</strong> <a href="3318.php">Guy Streeter: "Re: [hwloc-devel] Why doesn't my disk controller show up?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3321.php">Brice Goglin: "Re: [hwloc-devel] Why doesn't my disk controller show up?"</a>
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
