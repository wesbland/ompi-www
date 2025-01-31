<?
$subject_val = "Re: [OMPI devel] openmpi with FT enabled";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Oct 28 12:39:24 2013" -->
<!-- isoreceived="20131028163924" -->
<!-- sent="Mon, 28 Oct 2013 09:39:19 -0700" -->
<!-- isosent="20131028163919" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] openmpi with FT enabled" -->
<!-- id="5C12AB42-428B-4C43-90DB-DA1447BAFE56_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20131028154746.GB18035_at_lisas.de" -->
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
<strong>Subject:</strong> Re: [OMPI devel] openmpi with FT enabled<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-10-28 12:39:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13137.php">Mike Dubman: "Re: [OMPI devel] [EXTERNAL] Re: shmem vs. oshmem"</a>
<li><strong>Previous message:</strong> <a href="13135.php">Adrian Reber: "[OMPI devel] openmpi with FT enabled"</a>
<li><strong>In reply to:</strong> <a href="13135.php">Adrian Reber: "[OMPI devel] openmpi with FT enabled"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13138.php">Adrian Reber: "Re: [OMPI devel] openmpi with FT enabled"</a>
<li><strong>Reply:</strong> <a href="13138.php">Adrian Reber: "Re: [OMPI devel] openmpi with FT enabled"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm afraid C/R isn't supported in the trunk nor 1.7 release series at this time. We're looking to restore that support next year as part of the 1.9 release series.
<br>
<p><p>On Oct 28, 2013, at 8:47 AM, Adrian Reber &lt;adrian_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I am trying to compile openmpi (Revision: 29539) from svn
</span><br>
<span class="quotelev1">&gt; with '--with-ft=cr'.  I get a compilation error and I am
</span><br>
<span class="quotelev1">&gt; lost how to solve it:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ../../../../opal/mca/base/mca_base_components_open.c: In function 'open_components':
</span><br>
<span class="quotelev1">&gt; ../../../../opal/mca/base/mca_base_components_open.c:144:9: error: 'mca_base_component_distill_checkpoint_ready' undeclared (first use in this function)
</span><br>
<span class="quotelev1">&gt;     if (mca_base_component_distill_checkpoint_ready) {
</span><br>
<span class="quotelev1">&gt;         ^
</span><br>
<span class="quotelev1">&gt; ../../../../opal/mca/base/mca_base_components_open.c:144:9: note: each undeclared identifier is reported only once for each function it appears in
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mca_base_component_distill_checkpoint_ready exists in 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; contrib/amca-param-sets/ft-enable-cr
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; but I am not sure if contents from this file can be used in the code or
</span><br>
<span class="quotelev1">&gt; not. Any pointers on how to solve this error would be welcome.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 		Adrian
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13137.php">Mike Dubman: "Re: [OMPI devel] [EXTERNAL] Re: shmem vs. oshmem"</a>
<li><strong>Previous message:</strong> <a href="13135.php">Adrian Reber: "[OMPI devel] openmpi with FT enabled"</a>
<li><strong>In reply to:</strong> <a href="13135.php">Adrian Reber: "[OMPI devel] openmpi with FT enabled"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13138.php">Adrian Reber: "Re: [OMPI devel] openmpi with FT enabled"</a>
<li><strong>Reply:</strong> <a href="13138.php">Adrian Reber: "Re: [OMPI devel] openmpi with FT enabled"</a>
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
