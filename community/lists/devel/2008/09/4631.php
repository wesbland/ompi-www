<?
$subject_val = "Re: [OMPI devel] mtt IBM SPAWN error";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Sep  4 10:31:39 2008" -->
<!-- isoreceived="20080904143139" -->
<!-- sent="Thu, 4 Sep 2008 17:31:34 +0300" -->
<!-- isosent="20080904143134" -->
<!-- name="Lenny Verkhovsky" -->
<!-- email="lenny.verkhovsky_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] mtt IBM SPAWN error" -->
<!-- id="453d39990809040731s24ba47ffu589a94ed184267e4_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="453d39990806300421vc1f06f1m69983744894483c2_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] mtt IBM SPAWN error<br>
<strong>From:</strong> Lenny Verkhovsky (<em>lenny.verkhovsky_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-09-04 10:31:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4632.php">Jeff Squyres: "Re: [OMPI devel] allocating sm memory with page alignment"</a>
<li><strong>Previous message:</strong> <a href="4630.php">Ralph Castain: "[OMPI devel] Display map and allocation"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2008/06/4251.php">Lenny Verkhovsky: "Re: [OMPI devel] mtt IBM SPAWN error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2008/06/4252.php">Ralph H Castain: "Re: [OMPI devel] mtt IBM SPAWN error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
isn't it related to <a href="https://svn.open-mpi.org/trac/ompi/ticket/1469">https://svn.open-mpi.org/trac/ompi/ticket/1469</a> ?
<br>
<p>On 6/30/08, Lenny Verkhovsky &lt;lenny.verkhovsky_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am not familiar with spawn test of IBM, but maybe this is right
</span><br>
<span class="quotelev1">&gt; behavior,
</span><br>
<span class="quotelev1">&gt; if spawn test allocates 3 ranks on the node, and then allocates another 3
</span><br>
<span class="quotelev1">&gt; then this test suppose to fail due to max_slots=4.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; But it fails with the fallowing hostfile as well BUT WITH A DIFFERENT
</span><br>
<span class="quotelev1">&gt; ERROR.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #cat hostfile2
</span><br>
<span class="quotelev1">&gt; witch2 slots=4 max_slots=4
</span><br>
<span class="quotelev1">&gt; witch3 slots=4 max_slots=4
</span><br>
<span class="quotelev1">&gt; witch1:/home/BENCHMARKS/IBM # /home/USERS/lenny/OMPI_ORTE_18772/bin/mpirun
</span><br>
<span class="quotelev1">&gt; -np 3 -hostfile hostfile2 dynamic/spawn
</span><br>
<span class="quotelev1">&gt; bash: orted: command not found
</span><br>
<span class="quotelev1">&gt; [witch1:22789]
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; A daemon (pid 22791) died unexpectedly with status 127 while attempting
</span><br>
<span class="quotelev1">&gt; to launch so we are aborting.
</span><br>
<span class="quotelev1">&gt; There may be more information reported by the environment (see above).
</span><br>
<span class="quotelev1">&gt; This may be because the daemon was unable to find all the needed shared
</span><br>
<span class="quotelev1">&gt; libraries on the remote node. You may set your LD_LIBRARY_PATH to have the
</span><br>
<span class="quotelev1">&gt; location of the shared libraries on the remote nodes and this will
</span><br>
<span class="quotelev1">&gt; automatically be forwarded to the remote nodes.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; [witch1:22789]
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpirun was unable to cleanly terminate the daemons on the nodes shown
</span><br>
<span class="quotelev1">&gt; below. Additional manual cleanup may be required - please refer to
</span><br>
<span class="quotelev1">&gt; the &quot;orte-clean&quot; tool for assistance.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;         witch3 - daemon did not report back when launched
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mon, Jun 30, 2008 at 9:38 AM, Lenny Verkhovsky &lt;
</span><br>
<span class="quotelev1">&gt; lenny.verkhovsky_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt; trying to run mtt I failed to run IBM spawn test. It fails only when using
</span><br>
<span class="quotelev2">&gt;&gt; hostfile, and not when using host list.
</span><br>
<span class="quotelev2">&gt;&gt; ( OMPI from TRUNK )
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This is working :
</span><br>
<span class="quotelev2">&gt;&gt; #mpirun -np 3 -H witch2 dynamic/spawn
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This Fails:
</span><br>
<span class="quotelev2">&gt;&gt; # cat hostfile
</span><br>
<span class="quotelev2">&gt;&gt; witch2 slots=4 max_slots=4
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #mpirun -np 3 -hostfile hostfile dynamic/spawn
</span><br>
<span class="quotelev2">&gt;&gt; [witch1:12392]
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; There are not enough slots available in the system to satisfy the 3 slots
</span><br>
<span class="quotelev2">&gt;&gt; that were requested by the application:
</span><br>
<span class="quotelev2">&gt;&gt;   dynamic/spawn
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Either request fewer slots for your application, or make more slots
</span><br>
<span class="quotelev2">&gt;&gt; available
</span><br>
<span class="quotelev2">&gt;&gt; for use.
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; [witch1:12392]
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; A daemon (pid unknown) died unexpectedly on signal 1  while attempting to
</span><br>
<span class="quotelev2">&gt;&gt; launch so we are aborting.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; There may be more information reported by the environment (see above).
</span><br>
<span class="quotelev2">&gt;&gt; This may be because the daemon was unable to find all the needed shared
</span><br>
<span class="quotelev2">&gt;&gt; libraries on the remote node. You may set your LD_LIBRARY_PATH to have the
</span><br>
<span class="quotelev2">&gt;&gt; location of the shared libraries on the remote nodes and this will
</span><br>
<span class="quotelev2">&gt;&gt; automatically be forwarded to the remote nodes.
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; mpirun: clean termination accomplished
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Using hostfile1 also works
</span><br>
<span class="quotelev2">&gt;&gt; #cat hostfile1
</span><br>
<span class="quotelev2">&gt;&gt; witch2
</span><br>
<span class="quotelev2">&gt;&gt; witch2
</span><br>
<span class="quotelev2">&gt;&gt; witch2
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Best Regards
</span><br>
<span class="quotelev2">&gt;&gt; Lenny.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-4631/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4632.php">Jeff Squyres: "Re: [OMPI devel] allocating sm memory with page alignment"</a>
<li><strong>Previous message:</strong> <a href="4630.php">Ralph Castain: "[OMPI devel] Display map and allocation"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2008/06/4251.php">Lenny Verkhovsky: "Re: [OMPI devel] mtt IBM SPAWN error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2008/06/4252.php">Ralph H Castain: "Re: [OMPI devel] mtt IBM SPAWN error"</a>
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
