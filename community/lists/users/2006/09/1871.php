<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Sep 15 11:28:51 2006" -->
<!-- isoreceived="20060915152851" -->
<!-- sent="Fri, 15 Sep 2006 11:28:18 -0400" -->
<!-- isosent="20060915152818" -->
<!-- name="Prakash Velayutham" -->
<!-- email="prakash.velayutham_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Perl and MPI" -->
<!-- id="450AC692.6030804_at_cchmc.org" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20060915145955.87365.qmail_at_web37501.mail.mud.yahoo.com" -->
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
<strong>From:</strong> Prakash Velayutham (<em>prakash.velayutham_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-09-15 11:28:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1872.php">Renato Golin: "Re: [OMPI users] Perl and MPI"</a>
<li><strong>Previous message:</strong> <a href="1870.php">imran shaik: "[OMPI users] MPI on large clusters"</a>
<li><strong>In reply to:</strong> <a href="1869.php">imran shaik: "Re: [OMPI users] Perl and MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1873.php">imran shaik: "Re: [OMPI users] Perl and MPI"</a>
<li><strong>Reply:</strong> <a href="1873.php">imran shaik: "Re: [OMPI users] Perl and MPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
AFAIK, both those modules work with MPI standard API and not others. The
<br>
MPI::Simple I mentioned is actually Parallel::MPI::Simple. Both
<br>
Parallel::MPI and Parallel::MPI::Simple are available from CPAN.
<br>
<p>Prakash
<br>
<p>imran shaik wrote:
<br>
<span class="quotelev1">&gt; Hi Prakash,
</span><br>
<span class="quotelev1">&gt;   Do i need MPI runtime environment for sure to ue those perl modules??
</span><br>
<span class="quotelev1">&gt;   Cant i use some other clustring software.?
</span><br>
<span class="quotelev1">&gt;   Where can i get MPI::Simple??
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev1">&gt;   Imran
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev2">&gt;   &gt;Hello,
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev2">&gt;   &gt;My users use Parallel::MPI and MPI::Simple perl modules consistently
</span><br>
<span class="quotelev2">&gt;   &gt;without issues. But I am not sure of the support for MPI-2 standard with
</span><br>
<span class="quotelev2">&gt;   &gt;either of these modules. Is there someone here that can answer that
</span><br>
<span class="quotelev2">&gt;   &gt;question too? Also those modules seem to work only with MPICH now and
</span><br>
<span class="quotelev2">&gt;   &gt;not the other MPI distributions.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Prakash Velayutham &lt;prakash.velayutham_at_[hidden]&gt; wrote:  Renato Golin wrote:
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; On 9/13/06, imran shaik  wrote:
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  I need to run parallel jobs on a cluster typically of size 600 nodes and
</span><br>
<span class="quotelev3">&gt;&gt;&gt; running SGE, but the programmers are good at perl but not C or C++. So i
</span><br>
<span class="quotelev3">&gt;&gt;&gt; thought of MPI, but i dont know whether it has perl support?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       
</span><br>
<span class="quotelev2">&gt;&gt; Hi Imran,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; SGE will dispatch process among the nodes of your cluster but it does
</span><br>
<span class="quotelev2">&gt;&gt; not support interprocess communication, which MPI does. If your
</span><br>
<span class="quotelev2">&gt;&gt; problem is easily splittable (like parse a large apache log, read a
</span><br>
<span class="quotelev2">&gt;&gt; large xml list of things) you might be able to split the data and
</span><br>
<span class="quotelev2">&gt;&gt; spawn as many process as you can.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I do it using LSF (another dispatcher) and a Makefile that controls
</span><br>
<span class="quotelev2">&gt;&gt; the dependencies and spawn the processes (using make's -j flag) and it
</span><br>
<span class="quotelev2">&gt;&gt; works quite well. But if your job need the communication (like
</span><br>
<span class="quotelev2">&gt;&gt; processing big matrices, collecting and distributing data among
</span><br>
<span class="quotelev2">&gt;&gt; processes etc) you'll need an interprocess communication and that's
</span><br>
<span class="quotelev2">&gt;&gt; what MPI is best at.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; In a nutshell, you'll need the runtime environment to run MPI programs
</span><br>
<span class="quotelev2">&gt;&gt; as well as you need SGE's runtime environments on every node to
</span><br>
<span class="quotelev2">&gt;&gt; dispatch jobs and collect information.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; About MPI bindings for Perl, there's this module:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://search.cpan.org/~josh/Parallel-MPI-0.03/MPI.pm">http://search.cpan.org/~josh/Parallel-MPI-0.03/MPI.pm</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; but it's far too young to be trustworthy, IMHO, and you'll probably
</span><br>
<span class="quotelev2">&gt;&gt; need the MPI runtime on all nodes as well...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; cheers,
</span><br>
<span class="quotelev2">&gt;&gt; --renato
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; My users use Parallel::MPI and MPI::Simple perl modules consistently
</span><br>
<span class="quotelev1">&gt; without issues. But I am not sure of the support for MPI-2 standard with
</span><br>
<span class="quotelev1">&gt; either of these modules. Is there someone here that can answer that
</span><br>
<span class="quotelev1">&gt; question too? Also those modules seem to work only with MPICH now and
</span><br>
<span class="quotelev1">&gt; not the other MPI distributions.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Prakash
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1872.php">Renato Golin: "Re: [OMPI users] Perl and MPI"</a>
<li><strong>Previous message:</strong> <a href="1870.php">imran shaik: "[OMPI users] MPI on large clusters"</a>
<li><strong>In reply to:</strong> <a href="1869.php">imran shaik: "Re: [OMPI users] Perl and MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1873.php">imran shaik: "Re: [OMPI users] Perl and MPI"</a>
<li><strong>Reply:</strong> <a href="1873.php">imran shaik: "Re: [OMPI users] Perl and MPI"</a>
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
