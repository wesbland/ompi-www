<?
$subject_val = "Re: [OMPI users] [openib] segfault when using openib btl";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep 22 05:25:13 2010" -->
<!-- isoreceived="20100922092513" -->
<!-- sent="Wed, 22 Sep 2010 11:23:23 +0200" -->
<!-- isosent="20100922092323" -->
<!-- name="Eloi Gaudry" -->
<!-- email="eg_at_[hidden]" -->
<!-- subject="Re: [OMPI users] [openib] segfault when using openib btl" -->
<!-- id="201009221123.23829.eg_at_fft.be" -->
<!-- charset="iso-8859-15" -->
<!-- inreplyto="[OMPI users] [openib] segfault when using openib btl" -->
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
<strong>Subject:</strong> Re: [OMPI users] [openib] segfault when using openib btl<br>
<strong>From:</strong> Eloi Gaudry (<em>eg_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-09-22 05:23:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14268.php">Jeff Squyres: "Re: [OMPI users] BTL layer"</a>
<li><strong>Previous message:</strong> <a href="14266.php">Gabriele Fatigati: "[OMPI users] BTL layer"</a>
<li><strong>Maybe in reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/07/13463.php">Eloi Gaudry: "[OMPI users] [openib] segfault when using openib btl"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14305.php">Terry Dontje: "Re: [OMPI users] [openib] segfault when using openib btl"</a>
<li><strong>Reply:</strong> <a href="14305.php">Terry Dontje: "Re: [OMPI users] [openib] segfault when using openib btl"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Nysal,
<br>
<p>Thanks for your suggestions.
<br>
<p>I'm now able to get the checksum computed and redirected to stdout, thanks (I forgot the  &quot;-mca pml_base_verbose 5&quot; option, you were right).
<br>
I haven't been able to observe the segmentation fault (with hdr-&gt;tag=0) so far (when using pml csum) but I 'll let you know when I am.
<br>
<p>I've got two others question, which may be related to the error observed:
<br>
<p>1/ does the maximum number of MPI_Comm that can be handled by OpenMPI somehow depends on the btl being used (i.e. if I'm using 
<br>
openib, may I use the same number of MPI_Comm object as with tcp) ? Is there something as MPI_COMM_MAX in OpenMPI ?
<br>
<p>2/ the segfaults only appears during a mpi collective call, with very small message (one int is being broadcast, for instance) ; i followed the guidelines given at <a href="http://icl.cs.utk.edu/open">http://icl.cs.utk.edu/open</a>-
<br>
mpi/faq/?category=openfabrics#ib-small-message-rdma but the debug-build of OpenMPI asserts if I use a different min-size that 255. Anyway, if I deactivate eager_rdma, the segfaults remains. 
<br>
Does the openib btl handle very small message differently (even with eager_rdma deactivated) than tcp ? is there a way to make sure that large messages and small messages are handled the same way ?
<br>
<p>Regards,
<br>
Eloi
<br>
<p><p>On Friday 17 September 2010 17:57:17 Nysal Jan wrote:
<br>
<span class="quotelev1">&gt; Hi Eloi,
</span><br>
<span class="quotelev1">&gt; Create a debug build of OpenMPI (--enable-debug) and while running with the
</span><br>
<span class="quotelev1">&gt; csum PML add &quot;-mca pml_base_verbose 5&quot; to the command line. This will print
</span><br>
<span class="quotelev1">&gt; the checksum details for each fragment sent over the wire. I'm guessing it
</span><br>
<span class="quotelev1">&gt; didnt catch anything because the BTL failed. The checksum verification is
</span><br>
<span class="quotelev1">&gt; done in the PML, which the BTL calls via a callback function. In your case
</span><br>
<span class="quotelev1">&gt; the PML callback is never called because the hdr-&gt;tag is invalid. So
</span><br>
<span class="quotelev1">&gt; enabling checksum tracing also might not be of much use. Is it the first
</span><br>
<span class="quotelev1">&gt; Bcast that fails or the nth Bcast and what is the message size? I'm not
</span><br>
<span class="quotelev1">&gt; sure what could be the problem at this moment. I'm afraid you will have to
</span><br>
<span class="quotelev1">&gt; debug the BTL to find out more.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --Nysal
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Fri, Sep 17, 2010 at 4:39 PM, Eloi Gaudry &lt;eg_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Hi Nysal,
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; thanks for your response.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I've been unable so far to write a test case that could illustrate the
</span><br>
<span class="quotelev2">&gt; &gt; hdr-&gt;tag=0 error.
</span><br>
<span class="quotelev2">&gt; &gt; Actually, I'm only observing this issue when running an internode
</span><br>
<span class="quotelev2">&gt; &gt; computation involving infiniband hardware from Mellanox (MT25418,
</span><br>
<span class="quotelev2">&gt; &gt; ConnectX IB DDR, PCIe 2.0
</span><br>
<span class="quotelev2">&gt; &gt; 2.5GT/s, rev a0) with our time-domain software.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I checked, double-checked, and rechecked again every MPI use performed
</span><br>
<span class="quotelev2">&gt; &gt; during a parallel computation and I couldn't find any error so far. The
</span><br>
<span class="quotelev2">&gt; &gt; fact that the very
</span><br>
<span class="quotelev2">&gt; &gt; same parallel computation run flawlessly when using tcp (and disabling
</span><br>
<span class="quotelev2">&gt; &gt; openib support) might seem to indicate that the issue is somewhere
</span><br>
<span class="quotelev2">&gt; &gt; located inside the
</span><br>
<span class="quotelev2">&gt; &gt; openib btl or at the hardware/driver level.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I've just used the &quot;-mca pml csum&quot; option and I haven't seen any related
</span><br>
<span class="quotelev2">&gt; &gt; messages (when hdr-&gt;tag=0 and the segfaults occurs).
</span><br>
<span class="quotelev2">&gt; &gt; Any suggestion ?
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Regards,
</span><br>
<span class="quotelev2">&gt; &gt; Eloi
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; On Friday 17 September 2010 16:03:34 Nysal Jan wrote:
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Hi Eloi,
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Sorry for the delay in response. I haven't read the entire email
</span><br>
<span class="quotelev3">&gt; &gt; &gt; thread, but do you have a test case which can reproduce this error?
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Without that it will be difficult to nail down the cause. Just to
</span><br>
<span class="quotelev3">&gt; &gt; &gt; clarify, I do not work for an iwarp vendor. I can certainly try to
</span><br>
<span class="quotelev3">&gt; &gt; &gt; reproduce it on an IB system. There is also a PML called csum, you can
</span><br>
<span class="quotelev3">&gt; &gt; &gt; use it via &quot;-mca pml csum&quot;, which will checksum the MPI messages and
</span><br>
<span class="quotelev3">&gt; &gt; &gt; verify it at the receiver side for any data corruption. You can try
</span><br>
<span class="quotelev3">&gt; &gt; &gt; using it to see if it is able
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; to
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; catch anything.
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Regards
</span><br>
<span class="quotelev3">&gt; &gt; &gt; --Nysal
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; On Thu, Sep 16, 2010 at 3:48 PM, Eloi Gaudry &lt;eg_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; Hi Nysal,
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; I'm sorry to intrrupt, but I was wondering if you had a chance to
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; look
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; at
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; this error.
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; Regards,
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; Eloi
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; --
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; Eloi Gaudry
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; Free Field Technologies
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; Company Website: <a href="http://www.fft.be">http://www.fft.be</a>
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; Company Phone:   +32 10 487 959
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; ---------- Forwarded message ----------
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; From: Eloi Gaudry &lt;eg_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; Date: Wed, 15 Sep 2010 16:27:43 +0200
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; Subject: Re: [OMPI users] [openib] segfault when using openib btl
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; Hi,
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; I was wondering if anybody got a chance to have a look at this issue.
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; Regards,
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; Eloi
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; On Wednesday 18 August 2010 09:16:26 Eloi Gaudry wrote:
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; Hi Jeff,
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; Please find enclosed the output (valgrind.out.gz) from
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; /opt/openmpi-debug-1.4.2/bin/orterun -np 2 --host pbn11,pbn10 --mca
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; btl
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; openib,self --display-map --verbose --mca mpi_warn_on_fork 0 --mca
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; btl_openib_want_fork_support 0 -tag-output
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; /opt/valgrind-3.5.0/bin/valgrind --tool=memcheck
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; --suppressions=/opt/openmpi-debug-1.4.2/share/openmpi/openmpi-
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; valgrind.supp --suppressions=./suppressions.python.supp
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; /opt/actran/bin/actranpy_mp ...
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; Thanks,
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; Eloi
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; On Tuesday 17 August 2010 09:32:53 Eloi Gaudry wrote:
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; On Monday 16 August 2010 19:14:47 Jeff Squyres wrote:
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt; &gt; &gt; On Aug 16, 2010, at 10:05 AM, Eloi Gaudry wrote:
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt; I did run our application through valgrind but it couldn't
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt; find any &quot;Invalid write&quot;: there is a bunch of &quot;Invalid read&quot;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt; (I'm using
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 1.4.2
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt; with the suppression file), &quot;Use of uninitialized bytes&quot; and
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt; &quot;Conditional jump depending on uninitialized bytes&quot; in
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; different
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; ompi
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt; routines. Some of them are located in btl_openib_component.c.
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt; I'll send you an output of valgrind shortly.
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt; &gt; &gt; A lot of them in btl_openib_* are to be expected -- OpenFabrics
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt; &gt; &gt; uses OS-bypass methods for some of its memory, and therefore
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt; &gt; &gt; valgrind is unaware of them (and therefore incorrectly marks
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt; &gt; &gt; them as
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt; &gt; &gt; uninitialized).
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; would it  help if i use the upcoming 1.5 version of openmpi ? i
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; read
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; that
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; a huge effort has been done to clean-up the valgrind output ? but
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; maybe that this doesn't concern this btl (for the reasons you
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; mentionned).
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt; Another question, you said that the callback function pointer
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; should
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt; never be 0. But can the tag be null (hdr-&gt;tag) ?
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt; &gt; &gt; The tag is not a pointer -- it's just an integer.
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; I was worrying that its value could not be null.
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; I'll send a valgrind output soon (i need to build libpython
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; without pymalloc first).
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; Thanks,
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; Eloi
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt; Thanks for your help,
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt; Eloi
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt; On 16/08/2010 18:22, Jeff Squyres wrote:
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt; Sorry for the delay in replying.
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt; Odd; the values of the callback function pointer should
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt; never
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; be
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 0.
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt; This seems to suggest some kind of memory corruption is
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt; occurring.
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt; I don't know if it's possible, because the stack trace looks
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt; like you're calling through python, but can you run this
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt; application through valgrind, or some other memory-checking
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt; debugger?
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt; On Aug 10, 2010, at 7:15 AM, Eloi Gaudry wrote:
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;&gt; sorry, i just forgot to add the values of the function
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; parameters:
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;&gt; (gdb) print reg-&gt;cbdata
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;&gt; $1 = (void *) 0x0
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;&gt; (gdb) print openib_btl-&gt;super
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;&gt; $2 = {btl_component = 0x2b341edd7380, btl_eager_limit =
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 12288,
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;&gt; btl_rndv_eager_limit = 12288, btl_max_send_size = 65536,
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;&gt; btl_rdma_pipeline_send_length = 1048576,
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;&gt;   btl_rdma_pipeline_frag_size = 1048576,
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; btl_min_rdma_pipeline_size
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;&gt;   = 1060864, btl_exclusivity = 1024, btl_latency = 10,
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;&gt;   btl_bandwidth = 800, btl_flags = 310, btl_add_procs =
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;&gt;   0x2b341eb8ee47&lt;mca_btl_openib_add_procs&gt;, btl_del_procs =
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;&gt;   0x2b341eb90156&lt;mca_btl_openib_del_procs&gt;, btl_register =
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;&gt;   0, btl_finalize =
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;&gt;   0x2b341eb93186&lt;mca_btl_openib_finalize&gt;,
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; btl_alloc
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;&gt;   = 0x2b341eb90a3e&lt;mca_btl_openib_alloc&gt;, btl_free =
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;&gt;   0x2b341eb91400&lt;mca_btl_openib_free&gt;, btl_prepare_src =
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;&gt;   0x2b341eb91813&lt;mca_btl_openib_prepare_src&gt;,
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;&gt;   btl_prepare_dst
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; =
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;&gt;   0x2b341eb91f2e&lt;mca_btl_openib_prepare_dst&gt;, btl_send =
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;&gt;   0x2b341eb94517&lt;mca_btl_openib_send&gt;, btl_sendi =
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;&gt;   0x2b341eb9340d&lt;mca_btl_openib_sendi&gt;, btl_put =
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;&gt;   0x2b341eb94660&lt;mca_btl_openib_put&gt;, btl_get =
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;&gt;   0x2b341eb94c4e&lt;mca_btl_openib_get&gt;, btl_dump =
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;&gt;   0x2b341acd45cb&lt;mca_btl_base_dump&gt;, btl_mpool = 0xf3f4110,
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;&gt;   btl_register_error =
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;&gt;   0x2b341eb90565&lt;mca_btl_openib_register_error_cb&gt;,
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;&gt;   btl_ft_event
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; =
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;&gt;   0x2b341eb952e7&lt;mca_btl_openib_ft_event&gt;}
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;&gt; (gdb) print hdr-&gt;tag
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;&gt; $3 = 0 '\0'
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;&gt; (gdb) print des
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;&gt; $4 = (mca_btl_base_descriptor_t *) 0xf4a6700
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;&gt; (gdb) print reg-&gt;cbfunc
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;&gt; $5 = (mca_btl_base_module_recv_cb_fn_t) 0
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;&gt; Eloi
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;&gt; On Tuesday 10 August 2010 16:04:08 Eloi Gaudry wrote:
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt; Here is the output of a core file generated during a
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; segmentation
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt; fault observed during a collective call (using openib):
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt; #0  0x0000000000000000 in ?? ()
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt; (gdb) where
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt; #0  0x0000000000000000 in ?? ()
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt; #1  0x00002aedbc4e05f4 in btl_openib_handle_incoming
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt; (openib_btl=0x1902f9b0, ep=0x1908a1c0, frag=0x190d9700,
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt; byte_len=18) at btl_openib_component.c:2881 #2
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt; 0x00002aedbc4e25e2 in handle_wc (device=0x19024ac0, cq=0,
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt; wc=0x7ffff279ce90) at
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt; btl_openib_component.c:3178 #3  0x00002aedbc4e2e9d in
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; poll_device
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt; (device=0x19024ac0, count=2) at
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt; btl_openib_component.c:3318
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; #4
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt; 0x00002aedbc4e34b8 in progress_one_device
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; (device=0x19024ac0)
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt; at btl_openib_component.c:3426 #5  0x00002aedbc4e3561 in
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt; btl_openib_component_progress () at
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt; btl_openib_component.c:3451
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; #6
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt; 0x00002aedb8b22ab8 in opal_progress () at
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt; runtime/opal_progress.c:207 #7 0x00002aedb859f497 in
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt; opal_condition_wait (c=0x2aedb888ccc0, m=0x2aedb888cd20)
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt; at ../opal/threads/condition.h:99 #8
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt; 0x00002aedb859fa31 in ompi_request_default_wait_all
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; (count=2,
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt; requests=0x7ffff279d0e0, statuses=0x0) at
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt; request/req_wait.c:262 #9 0x00002aedbd7559ad in
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt; ompi_coll_tuned_allreduce_intra_recursivedoubling
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt; (sbuf=0x7ffff279d444, rbuf=0x7ffff279d440, count=1,
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt; dtype=0x6788220, op=0x6787a20,
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt; comm=0x19d81ff0, module=0x19d82b20) at
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; coll_tuned_allreduce.c:223
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt; #10 0x00002aedbd7514f7 in
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt; ompi_coll_tuned_allreduce_intra_dec_fixed
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt; (sbuf=0x7ffff279d444, rbuf=0x7ffff279d440, count=1,
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt; dtype=0x6788220, op=0x6787a20, comm=0x19d81ff0,
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt; module=0x19d82b20) at
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt; coll_tuned_decision_fixed.c:63
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt; #11 0x00002aedb85c7792 in PMPI_Allreduce
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; (sendbuf=0x7ffff279d444,
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt; recvbuf=0x7ffff279d440, count=1, datatype=0x6788220,
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; op=0x6787a20,
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt; comm=0x19d81ff0) at pallreduce.c:102 #12
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt; 0x0000000004387dbf
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; in
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt; FEMTown::MPI::Allreduce (sendbuf=0x7ffff279d444,
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt; recvbuf=0x7ffff279d440, count=1, datatype=0x6788220,
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; op=0x6787a20,
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt; comm=0x19d81ff0) at stubs.cpp:626 #13 0x0000000004058be8
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt; in FEMTown::Domain::align (itf=
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; {&lt;FEMTown::Boost::shared_base_ptr&lt;FEMTown::Domain::Int
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt;             er fa ce&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt; = {_vptr.shared_base_ptr = 0x7ffff279d620, ptr_ = {px =
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt; 0x199942a4, pn = {pi_ = 0x6}}},&lt;No data fields&gt;}) at
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt; interface.cpp:371 #14 0x00000000040cb858 in
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt; FEMTown::Field::detail::align_itfs_and_neighbhors (dim=2,
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; set={px
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt; = 0x7ffff279d780, pn = {pi_ = 0x2f279d640}},
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt; check_info=@0x7ffff279d7f0) at check.cpp:63 #15
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 0x00000000040cbfa8
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt; in FEMTown::Field::align_elements (set={px =
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt; 0x7ffff279d950, pn
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; =
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt; {pi_ = 0x66e08d0}}, check_info=@0x7ffff279d7f0) at
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt; check.cpp:159 #16 0x00000000039acdd4 in
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt; PyField_align_elements (self=0x0, args=0x2aaab0765050,
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt; kwds=0x19d2e950) at check.cpp:31 #17 0x0000000001fbf76d in
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt; FEMTown::Main::ExErrCatch&lt;_object* (*)(_object*, _object*,
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt; _object*)&gt;::exec&lt;_object&gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt; (this=0x7ffff279dc20, s=0x0, po1=0x2aaab0765050,
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt; po2=0x19d2e950) at
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt; /home/qa/svntop/femtown/modules/main/py/exception.hpp:463
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; #18
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt; 0x00000000039acc82 in PyField_align_elements_ewrap
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; (self=0x0,
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt; args=0x2aaab0765050, kwds=0x19d2e950) at check.cpp:39 #19
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt; 0x00000000044093a0 in PyEval_EvalFrameEx (f=0x19b52e90,
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt; throwflag=&lt;value optimized out&gt;) at Python/ceval.c:3921
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt; #20 0x000000000440aae9 in PyEval_EvalCodeEx
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt; (co=0x2aaab754ad50, globals=&lt;value optimized out&gt;,
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt; locals=&lt;value optimized out&gt;, args=0x3, argcount=1,
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt; kws=0x19ace4a0, kwcount=2,
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt; defs=0x2aaab75e4800, defcount=2, closure=0x0) at
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt; Python/ceval.c:2968
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt; #21 0x0000000004408f58 in PyEval_EvalFrameEx
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt; (f=0x19ace2d0, throwflag=&lt;value optimized out&gt;) at
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt; Python/ceval.c:3802 #22 0x000000000440aae9 in
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt; PyEval_EvalCodeEx (co=0x2aaab7550120, globals=&lt;value
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt; optimized out&gt;, locals=&lt;value optimized out&gt;, args=0x7,
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt; argcount=1, kws=0x19acc418, kwcount=3,
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt; defs=0x2aaab759e958, defcount=6, closure=0x0) at
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt; Python/ceval.c:2968
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt; #23 0x0000000004408f58 in PyEval_EvalFrameEx
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt; (f=0x19acc1c0, throwflag=&lt;value optimized out&gt;) at
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt; Python/ceval.c:3802 #24 0x000000000440aae9 in
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt; PyEval_EvalCodeEx (co=0x2aaab8b5e738, globals=&lt;value
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt; optimized out&gt;, locals=&lt;value optimized out&gt;, args=0x6,
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt; argcount=1, kws=0x19abd328, kwcount=5,
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt; defs=0x2aaab891b7e8, defcount=3, closure=0x0) at
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt; Python/ceval.c:2968
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt; #25 0x0000000004408f58 in PyEval_EvalFrameEx
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt; (f=0x19abcea0, throwflag=&lt;value optimized out&gt;) at
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt; Python/ceval.c:3802 #26 0x000000000440aae9 in
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt; PyEval_EvalCodeEx (co=0x2aaab3eb4198, globals=&lt;value
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt; optimized out&gt;, locals=&lt;value optimized out&gt;, args=0xb,
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt; argcount=1, kws=0x19a89df0, kwcount=10, defs=0x0,
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt; defcount=0, closure=0x0) at Python/ceval.c:2968
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt; #27 0x0000000004408f58 in PyEval_EvalFrameEx
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt; (f=0x19a89c40, throwflag=&lt;value optimized out&gt;) at
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt; Python/ceval.c:3802 #28 0x000000000440aae9 in
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt; PyEval_EvalCodeEx (co=0x2aaab3eb4288, globals=&lt;value
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt; optimized out&gt;, locals=&lt;value optimized out&gt;, args=0x1,
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt; argcount=0, kws=0x19a89330, kwcount=0,
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt; defs=0x2aaab8b66668, defcount=1, closure=0x0) at
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt; Python/ceval.c:2968
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt; #29 0x0000000004408f58 in PyEval_EvalFrameEx
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt; (f=0x19a891b0, throwflag=&lt;value optimized out&gt;) at
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt; Python/ceval.c:3802 #30 0x000000000440aae9 in
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt; PyEval_EvalCodeEx (co=0x2aaab8b6a738, globals=&lt;value
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt; optimized out&gt;, locals=&lt;value optimized out&gt;, args=0x0,
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt; argcount=0, kws=0x0, kwcount=0, defs=0x0, defcount=0,
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt; closure=0x0) at
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt; Python/ceval.c:2968
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt; #31 0x000000000440ac02 in PyEval_EvalCode (co=0x1902f9b0,
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt; globals=0x0, locals=0x190d9700) at Python/ceval.c:522 #32
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt; 0x000000000442853c in PyRun_StringFlags (str=0x192fd3d8
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt; &quot;DIRECT.Actran.main()&quot;, start=&lt;value optimized out&gt;,
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt; globals=0x192213d0, locals=0x192213d0, flags=0x0) at
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt; Python/pythonrun.c:1335 #33 0x0000000004429690 in
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt; PyRun_SimpleStringFlags (command=0x192fd3d8
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt; &quot;DIRECT.Actran.main()&quot;, flags=0x0) at
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt; Python/pythonrun.c:957 #34 0x0000000001fa1cf9 in
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt; FEMTown::Python::FEMPy::run_application
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; (this=0x7ffff279f650)
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt; at fempy.cpp:873 #35 0x000000000434ce99 in
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; FEMTown::Main::Batch::run
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt; (this=0x7ffff279f650) at batch.cpp:374 #36
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 0x0000000001f9aa25
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt; in main (argc=8, argv=0x7ffff279fa48) at main.cpp:10 (gdb)
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt; f 1 #1  0x00002aedbc4e05f4 in btl_openib_handle_incoming
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt; (openib_btl=0x1902f9b0, ep=0x1908a1c0, frag=0x190d9700,
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt; byte_len=18) at btl_openib_component.c:2881 2881
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt; reg-&gt;cbfunc( &amp;openib_btl-&gt;super, hdr-&gt;tag, des,
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt; reg-&gt;cbdata
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; );
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt; Current language: auto; currently c
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt; (gdb)
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt; #1  0x00002aedbc4e05f4 in btl_openib_handle_incoming
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt; (openib_btl=0x1902f9b0, ep=0x1908a1c0, frag=0x190d9700,
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt; byte_len=18) at btl_openib_component.c:2881 2881
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt; reg-&gt;cbfunc( &amp;openib_btl-&gt;super, hdr-&gt;tag, des,
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt; reg-&gt;cbdata
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; );
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt; (gdb) l 2876
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt; 2877        if(OPAL_LIKELY(!(is_credit_msg =
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt; is_credit_message(frag)))) { 2878            /* call
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt; registered callback */
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt; 2879            mca_btl_active_message_callback_t* reg;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt; 2880            reg = mca_btl_base_active_message_trigger
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt; + hdr-&gt;tag; 2881           
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt; reg-&gt;cbfunc(&amp;openib_btl-&gt;super, hdr-&gt;tag, des,
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt; reg-&gt;cbdata ); 2882
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt; if(MCA_BTL_OPENIB_RDMA_FRAG(frag)) { 2883               
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt; cqp
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; =
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt; (hdr-&gt;credits&gt;&gt;  11)&amp;  0x0f;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt; 2884                hdr-&gt;credits&amp;= 0x87ff;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt; 2885            } else {
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt; Regards,
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt; Eloi
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt; On Friday 16 July 2010 16:01:02 Eloi Gaudry wrote:
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt; Hi Edgar,
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt; The only difference I could observed was that the
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt; segmentation fault appeared sometimes later during the
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt; parallel computation.
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt; I'm running out of idea here. I wish I could use the
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt; &quot;--mca
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; coll
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt; tuned&quot; with &quot;--mca self,sm,tcp&quot; so that I could check
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt; that the issue is not somehow limited to the tuned
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt; collective routines.
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt; Eloi
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt; On Thursday 15 July 2010 17:24:24 Edgar Gabriel wrote:
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt; On 7/15/2010 10:18 AM, Eloi Gaudry wrote:
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; hi edgar,
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; thanks for the tips, I'm gonna try this option as well.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; the
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; segmentation fault i'm observing always happened during
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; a collective communication indeed... does it basically
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; switch
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; all
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; collective communication to basic mode, right ?
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; sorry for my ignorance, but what's a NCA ?
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt; sorry, I meant to type HCA (InifinBand networking card)
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt; Thanks
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt; Edgar
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; thanks,
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; &#233;loi
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; On Thursday 15 July 2010 16:20:54 Edgar Gabriel wrote:
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; you could try first to use the algorithms in the basic
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; module,
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; e.g.
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; mpirun -np x --mca coll basic ./mytest
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; and see whether this makes a difference. I used to
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; observe
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; sometimes a (similar ?) problem in the openib btl
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; triggered from the tuned collective component, in
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; cases where the ofed libraries were installed but no
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; NCA was found on a node. It used to work however with
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; the basic component.
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Thanks
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Edgar
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; On 7/15/2010 3:08 AM, Eloi Gaudry wrote:
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; hi Rolf,
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; unfortunately, i couldn't get rid of that annoying
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; segmentation fault when selecting another bcast
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; algorithm. i'm now going to replace MPI_Bcast with a
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; naive
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; implementation (using MPI_Send and MPI_Recv) and see
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; if
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; that
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; helps.
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; regards,
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &#233;loi
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; On Wednesday 14 July 2010 10:59:53 Eloi Gaudry wrote:
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Hi Rolf,
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; thanks for your input. You're right, I miss the
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; coll_tuned_use_dynamic_rules option.
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; I'll check if I the segmentation fault disappears
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; when
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; using
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; the basic bcast linear algorithm using the proper
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; command line you provided.
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Regards,
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Eloi
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; On Tuesday 13 July 2010 20:39:59 Rolf vandeVaart
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Hi Eloi:
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; To select the different bcast algorithms, you need
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; to add an extra mca parameter that tells the
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; library to use dynamic selection. --mca
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; coll_tuned_use_dynamic_rules 1
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; One way to make sure you are typing this in
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; correctly is
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; to
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; use it with ompi_info.  Do the following:
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; ompi_info -mca coll_tuned_use_dynamic_rules 1
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; --param
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; coll
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; You should see lots of output with all the
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; different algorithms that can be selected for the
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; various collectives. Therefore, you need this:
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; --mca coll_tuned_use_dynamic_rules 1 --mca
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; coll_tuned_bcast_algorithm 1
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Rolf
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; On 07/13/10 11:28, Eloi Gaudry wrote:
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; I've found that &quot;--mca coll_tuned_bcast_algorithm
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 1&quot; allowed to switch to the basic linear
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; algorithm. Anyway whatever the algorithm used,
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; the segmentation fault remains.
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Does anyone could give some advice on ways to
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; diagnose
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; the
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; issue I'm facing ?
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Regards,
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Eloi
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; On Monday 12 July 2010 10:53:58 Eloi Gaudry wrote:
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; I'm focusing on the MPI_Bcast routine that seems
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; to randomly segfault when using the openib btl.
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; I'd
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; like
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; to
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; know if there is any way to make OpenMPI switch
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; to
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; a
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; different algorithm than the default one being
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; selected for MPI_Bcast.
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Thanks for your help,
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Eloi
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; On Friday 02 July 2010 11:06:52 Eloi Gaudry wrote:
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; I'm observing a random segmentation fault during
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; an
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; internode parallel computation involving the
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; openib
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; btl
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; and OpenMPI-1.4.2 (the same issue can be
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; observed with OpenMPI-1.3.3).
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;    mpirun (Open MPI) 1.4.2
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;    Report bugs to
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;    <a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;    [pbn08:02624] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;    [pbn08:02624] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;    [pbn08:02624] Signal code: Address not mapped
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; (1)
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;    [pbn08:02624] Failing at address: (nil)
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;    [pbn08:02624] [ 0] /lib64/libpthread.so.0
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;    [0x349540e4c0] [pbn08:02624] *** End of error
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; message
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;    ***
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;    sh: line 1:  2624 Segmentation fault
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; \/share\/hpc3\/actran_suite\/Actran_11\.0\.rc2\.41872\/R
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; ed Ha tE L\ -5 \/ x 86 _6 4\ /bin\/actranpy_mp
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; '--apl=/share/hpc3/actran_suite/Actran_11.0.rc2.41872/Re
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; dH at EL -5 /x 86 _ 64 /A c tran_11.0.rc2.41872'
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; '--inputfile=/work/st25652/LSF_130073_0_47696_0/Case1_3D
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; re al _m 4_ n2 .d a t'
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; '--scratch=/scratch/st25652/LSF_130073_0_47696_0/scratch
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; ' '--mem=3200' '--threads=1'
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; '--errorlevel=FATAL' '--t_max=0.1'
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; '--parallel=domain'
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; If I choose not to use the openib btl (by using
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; --mca btl self,sm,tcp on the command line, for
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; instance), I don't encounter any problem and the
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; parallel computation runs flawlessly.
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; I would like to get some help to be able:
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; - to diagnose the issue I'm facing with the
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; openib btl - understand why this issue is
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; observed only when
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; using
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; the openib btl and not when using self,sm,tcp
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Any help would be very much appreciated.
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; The outputs of ompi_info and the configure
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; scripts of OpenMPI are enclosed to this email,
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; and some
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; information
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; on the infiniband drivers as well.
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Here is the command line used when launching a
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; parallel
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; computation
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; using infiniband:
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;    path_to_openmpi/bin/mpirun -np $NPROCESS
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;    --hostfile host.list --mca
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; btl openib,sm,self,tcp  --display-map --verbose
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; --version --mca mpi_warn_on_fork 0 --mca
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; btl_openib_want_fork_support 0 [...]
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; and the command line used if not using infiniband:
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;    path_to_openmpi/bin/mpirun -np $NPROCESS
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;    --hostfile host.list --mca
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; btl self,sm,tcp  --display-map --verbose
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; --version
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; --mca
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; mpi_warn_on_fork 0 --mca
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; btl_openib_want_fork_support
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 0
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [...]
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Eloi
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14268.php">Jeff Squyres: "Re: [OMPI users] BTL layer"</a>
<li><strong>Previous message:</strong> <a href="14266.php">Gabriele Fatigati: "[OMPI users] BTL layer"</a>
<li><strong>Maybe in reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/07/13463.php">Eloi Gaudry: "[OMPI users] [openib] segfault when using openib btl"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14305.php">Terry Dontje: "Re: [OMPI users] [openib] segfault when using openib btl"</a>
<li><strong>Reply:</strong> <a href="14305.php">Terry Dontje: "Re: [OMPI users] [openib] segfault when using openib btl"</a>
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
