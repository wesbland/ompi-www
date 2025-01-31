<?
$subject_val = "[OMPI users] Segfault when using valgrind";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul  6 15:46:59 2009" -->
<!-- isoreceived="20090706194659" -->
<!-- sent="Mon, 6 Jul 2009 13:46:34 -0600" -->
<!-- isosent="20090706194634" -->
<!-- name="Justin Luitjens" -->
<!-- email="luitjens_at_[hidden]" -->
<!-- subject="[OMPI users] Segfault when using valgrind" -->
<!-- id="913d17a50907061246s44783ea3nf83874e28be10f4e_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] Segfault when using valgrind<br>
<strong>From:</strong> Justin Luitjens (<em>luitjens_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-07-06 15:46:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9845.php">Robert Kubrick: "[OMPI users] br / MapReduce"</a>
<li><strong>Previous message:</strong> <a href="9843.php">Luis Vitorio Cargnini: "Re: [OMPI users] MPI and C++ - now Send and Receive of Classes and STL containers"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,  I am attempting to debug a memory corruption in an mpi program using
<br>
valgrind.  Howver, when I run with valgrind I get semi-random segfaults and
<br>
valgrind messages with the openmpi library.  Here is an example of such a
<br>
seg fault:
<br>
<p>==6153==
<br>
==6153== Invalid read of size 8
<br>
==6153==    at 0x19102EA0: (within
<br>
/usr/lib/openmpi/lib/openmpi/mca_btl_sm.so)
<br>
==6153==    by 0x182ABACB: (within
<br>
/usr/lib/openmpi/lib/openmpi/mca_pml_ob1.so)
<br>
==6153==    by 0x182A3040: (within
<br>
/usr/lib/openmpi/lib/openmpi/mca_pml_ob1.so)
<br>
==6153==    by 0xB425DD3: PMPI_Isend (in
<br>
/usr/lib/openmpi/lib/libmpi.so.0.0.0)
<br>
==6153==    by 0x7B83DA8: int Uintah::SFC&lt;double&gt;::MergeExchange&lt;unsigned
<br>
char&gt;(int, std::vector&lt;Uintah::History&lt;unsigned char&gt;,
<br>
std::allocator&lt;Uintah::History&lt;unsigned char&gt; &gt; &gt;&amp;,
<br>
std::vector&lt;Uintah::History&lt;unsigned char&gt;,
<br>
std::allocator&lt;Uintah::History&lt;unsigned char&gt; &gt; &gt;&amp;,
<br>
std::vector&lt;Uintah::History&lt;unsigned char&gt;,
<br>
std::allocator&lt;Uintah::History&lt;unsigned char&gt; &gt; &gt;&amp;) (SFC.h:2989)
<br>
==6153==    by 0x7B84A8F: void Uintah::SFC&lt;double&gt;::Batchers&lt;unsigned
<br>
char&gt;(std::vector&lt;Uintah::History&lt;unsigned char&gt;,
<br>
std::allocator&lt;Uintah::History&lt;unsigned char&gt; &gt; &gt;&amp;,
<br>
std::vector&lt;Uintah::History&lt;unsigned char&gt;,
<br>
std::allocator&lt;Uintah::History&lt;unsigned char&gt; &gt; &gt;&amp;,
<br>
std::vector&lt;Uintah::History&lt;unsigned char&gt;,
<br>
std::allocator&lt;Uintah::History&lt;unsigned char&gt; &gt; &gt;&amp;) (SFC.h:3730)
<br>
==6153==    by 0x7B8857B: void Uintah::SFC&lt;double&gt;::Cleanup&lt;unsigned
<br>
char&gt;(std::vector&lt;Uintah::History&lt;unsigned char&gt;,
<br>
std::allocator&lt;Uintah::History&lt;unsigned char&gt; &gt; &gt;&amp;,
<br>
std::vector&lt;Uintah::History&lt;unsigned char&gt;,
<br>
std::allocator&lt;Uintah::History&lt;unsigned char&gt; &gt; &gt;&amp;,
<br>
std::vector&lt;Uintah::History&lt;unsigned char&gt;,
<br>
std::allocator&lt;Uintah::History&lt;unsigned char&gt; &gt; &gt;&amp;) (SFC.h:3695)
<br>
==6153==    by 0x7B88CC6: void Uintah::SFC&lt;double&gt;::Parallel0&lt;3, unsigned
<br>
char&gt;() (SFC.h:2928)
<br>
==6153==    by 0x7C00AAB: void Uintah::SFC&lt;double&gt;::Parallel&lt;3, unsigned
<br>
char&gt;() (SFC.h:1108)
<br>
==6153==    by 0x7C0EF39: void Uintah::SFC&lt;double&gt;::GenerateDim&lt;3&gt;(int)
<br>
(SFC.h:694)
<br>
==6153==    by 0x7C0F0F2: Uintah::SFC&lt;double&gt;::GenerateCurve(int)
<br>
(SFC.h:670)
<br>
==6153==    by 0x7B30CAC:
<br>
Uintah::DynamicLoadBalancer::useSFC(Uintah::Handle&lt;Uintah::Level&gt; const&amp;,
<br>
int*) (DynamicLoadBalancer.cc:429)
<br>
==6153==  Address 0x10 is not stack'd, malloc'd or (recently) free'd
<br>
^G^G^GThread &quot;main&quot;(pid 6153) caught signal SIGSEGV at address (nil)
<br>
(segmentation violation)
<br>
<p>Looking at the code for our isend at SFC.h:298 does not seem to have any
<br>
errors:
<br>
<p>=============================================
<br>
&nbsp;&nbsp;MergeInfo&lt;BITS&gt; myinfo,theirinfo;
<br>
<p>&nbsp;&nbsp;MPI_Request srequest, rrequest;
<br>
&nbsp;&nbsp;MPI_Status status;
<br>
<p>&nbsp;&nbsp;myinfo.n=n;
<br>
&nbsp;&nbsp;if(n!=0)
<br>
&nbsp;&nbsp;{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;myinfo.min=sendbuf[0].bits;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;myinfo.max=sendbuf[n-1].bits;
<br>
&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;//cout &lt;&lt; rank &lt;&lt; &quot; n:&quot; &lt;&lt; n &lt;&lt; &quot; min:&quot; &lt;&lt; (int)myinfo.min &lt;&lt; &quot;max:&quot; &lt;&lt;
<br>
(int)myinfo.max &lt;&lt; endl;
<br>
<p>&nbsp;&nbsp;MPI_Isend(&amp;myinfo,sizeof(MergeInfo&lt;BITS&gt;),MPI_BYTE,to,0,Comm,&amp;srequest);
<br>
==============================================
<br>
<p>myinfo is a struct located on the stack, to is the rank of the processor
<br>
that the message is being sent to, and srequest is also on the stack.  When
<br>
I don't run with valgrind my program runs past this point just fine.
<br>
<p>I am currently using openmpi 1.3 from the debian unstable branch.  I also
<br>
see the same type of segfault in a different portion of the code involving
<br>
an MPI_Allgather which can be seen below:
<br>
<p>==============================================
<br>
==22736== Use of uninitialised value of size 8
<br>
==22736==    at 0x19104775: mca_btl_sm_component_progress (opal_list.h:322)
<br>
==22736==    by 0x1382CE09: opal_progress (opal_progress.c:207)
<br>
==22736==    by 0xB404264: ompi_request_default_wait_all (condition.h:99)
<br>
==22736==    by 0x1A1ADC16: ompi_coll_tuned_sendrecv_actual
<br>
(coll_tuned_util.c:55)
<br>
==22736==    by 0x1A1B61E1: ompi_coll_tuned_allgatherv_intra_bruck
<br>
(coll_tuned_util.h:60)
<br>
==22736==    by 0xB418B2E: PMPI_Allgatherv (pallgatherv.c:121)
<br>
==22736==    by 0x646CCF7: Uintah::Level::setBCTypes() (Level.cc:728)
<br>
==22736==    by 0x646D823: Uintah::Level::finalizeLevel() (Level.cc:537)
<br>
==22736==    by 0x6465457:
<br>
Uintah::Grid::problemSetup(Uintah::Handle&lt;Uintah::ProblemSpec&gt; const&amp;,
<br>
Uintah::ProcessorGroup const*, bool) (Grid.cc:866)
<br>
==22736==    by 0x8345759: Uintah::SimulationController::gridSetup()
<br>
(SimulationController.cc:243)
<br>
==22736==    by 0x834F418: Uintah::AMRSimulationController::run()
<br>
(AMRSimulationController.cc:117)
<br>
==22736==    by 0x4089AE: main (sus.cc:629)
<br>
==22736==
<br>
==22736== Invalid read of size 8
<br>
==22736==    at 0x19104775: mca_btl_sm_component_progress (opal_list.h:322)
<br>
==22736==    by 0x1382CE09: opal_progress (opal_progress.c:207)
<br>
==22736==    by 0xB404264: ompi_request_default_wait_all (condition.h:99)
<br>
==22736==    by 0x1A1ADC16: ompi_coll_tuned_sendrecv_actual
<br>
(coll_tuned_util.c:55)
<br>
==22736==    by 0x1A1B61E1: ompi_coll_tuned_allgatherv_intra_bruck
<br>
(coll_tuned_util.h:60)
<br>
==22736==    by 0xB418B2E: PMPI_Allgatherv (pallgatherv.c:121)
<br>
==22736==    by 0x646CCF7: Uintah::Level::setBCTypes() (Level.cc:728)
<br>
==22736==    by 0x646D823: Uintah::Level::finalizeLevel() (Level.cc:537)
<br>
==22736==    by 0x6465457:
<br>
Uintah::Grid::problemSetup(Uintah::Handle&lt;Uintah::ProblemSpec&gt; const&amp;,
<br>
Uintah::ProcessorGroup const*, bool) (Grid.cc:866)
<br>
==22736==    by 0x8345759: Uintah::SimulationController::gridSetup()
<br>
(SimulationController.cc:243)
<br>
==22736==    by 0x834F418: Uintah::AMRSimulationController::run()
<br>
(AMRSimulationController.cc:117)
<br>
==22736==    by 0x4089AE: main (sus.cc:629)
<br>
================================================================
<br>
<p>Are these problems with openmpi and is there any known work arounds?
<br>
<p>Thanks,
<br>
Justin
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-9844/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9845.php">Robert Kubrick: "[OMPI users] br / MapReduce"</a>
<li><strong>Previous message:</strong> <a href="9843.php">Luis Vitorio Cargnini: "Re: [OMPI users] MPI and C++ - now Send and Receive of Classes and STL containers"</a>
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
