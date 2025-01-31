<?
$subject_val = "Re: [OMPI users] MPIRUN Error on Mac pro i7 laptop and linux desktop";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul 28 12:43:42 2010" -->
<!-- isoreceived="20100728164342" -->
<!-- sent="Wed, 28 Jul 2010 10:43:34 -0600" -->
<!-- isosent="20100728164334" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPIRUN Error on Mac pro i7 laptop and linux desktop" -->
<!-- id="3064EFE2-FF3C-4E40-BEB9-E52D543705FE_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="AANLkTi=X5Z8VRHJs9p0MKGRnFYsSqq9gDuvZ-7a0_dX0_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPIRUN Error on Mac pro i7 laptop and linux desktop<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-07-28 12:43:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13844.php">Jeff Squyres: "Re: [OMPI users] MPIRUN Error on Mac pro i7 laptop and linux desktop"</a>
<li><strong>Previous message:</strong> <a href="13842.php">christophe petit: "[OMPI users] MPIRUN Error on Mac pro i7 laptop and linux desktop"</a>
<li><strong>In reply to:</strong> <a href="13842.php">christophe petit: "[OMPI users] MPIRUN Error on Mac pro i7 laptop and linux desktop"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13844.php">Jeff Squyres: "Re: [OMPI users] MPIRUN Error on Mac pro i7 laptop and linux desktop"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
First thing is to ensure you are getting the version of OMPI that you expect. Both the Mac and Debian come with their own pre-installed versions, so you have to ensure that PATH and LD_LIBRARY_PATH are correctly pointing to the version you installed and compiled against.
<br>
<p><p>On Jul 28, 2010, at 10:28 AM, christophe petit wrote:
<br>
<p><span class="quotelev1">&gt; hello,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; i have a problem concerning the execution of a f90 program (explicitPar) compiled with openmpi-1.4.2. I get nearly the same error on my debian desktop ( AMD Phenom(tm) 9550 Quad-Core Processor) and my mac pro i7 laptop :
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; on mac pro i7 :
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ mpiexec -np 2 explicitPar
</span><br>
<span class="quotelev1">&gt; [macbook-pro-de-fab.livebox.home:48805] *** An error occurred in MPI_Cart_shift
</span><br>
<span class="quotelev1">&gt; [macbook-pro-de-fab.livebox.home:48805] *** on communicator MPI_COMM_WORLD
</span><br>
<span class="quotelev1">&gt; [macbook-pro-de-fab.livebox.home:48805] *** MPI_ERR_COMM: invalid communicator
</span><br>
<span class="quotelev1">&gt; [macbook-pro-de-fab.livebox.home:48805] *** MPI_ERRORS_ARE_FATAL (your MPI job will now abort)
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpiexec has exited due to process rank 1 with PID 48805 on
</span><br>
<span class="quotelev1">&gt; node macbook-pro-de-fab.livebox.home exiting without calling &quot;finalize&quot;. This may
</span><br>
<span class="quotelev1">&gt; have caused other processes in the application to be
</span><br>
<span class="quotelev1">&gt; terminated by signals sent by mpiexec (as reported here).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; on my debian desktop :
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mpirun -np 2 explicitPar
</span><br>
<span class="quotelev1">&gt; [pablo:11665] *** An error occurred in MPI_Cart_shift
</span><br>
<span class="quotelev1">&gt; [pablo:11665] *** on communicator MPI_COMM_WORLD
</span><br>
<span class="quotelev1">&gt; [pablo:11665] *** MPI_ERR_COMM: invalid communicator
</span><br>
<span class="quotelev1">&gt; [pablo:11665] *** MPI_ERRORS_ARE_FATAL (your MPI job will now abort)
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpirun has exited due to process rank 1 with PID 11665 on
</span><br>
<span class="quotelev1">&gt; node pablo exiting without calling &quot;finalize&quot;. This may
</span><br>
<span class="quotelev1">&gt; have caused other processes in the application to be
</span><br>
<span class="quotelev1">&gt; terminated by signals sent by mpirun (as reported here).
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have installed openmpi-1.4.2 with the following options :
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ./configure --prefix=/usr/local/openmpi --enable-mpi-f77 --enable-mpi-f90
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; with exported variables on bash shell : FC=gfortran F90=gfortran F77=gfortran CC=gcc CXX=g++
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The  installation has been completed, the program compiles fine but i don't understand what's wrong. I note that with a single processor (&quot;mpirun -np 1 explicitPar&quot;), execution works fine.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; My debian desktop is a quad-core, so, theoretically, i can put up to 4 for &quot;np&quot; parameter.
</span><br>
<span class="quotelev1">&gt; On my mac pro i7, i don't know how processors are there, but the &quot;htop&quot; command makes appear 4 cores too.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Anyone has a solution ?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Regards.
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
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13844.php">Jeff Squyres: "Re: [OMPI users] MPIRUN Error on Mac pro i7 laptop and linux desktop"</a>
<li><strong>Previous message:</strong> <a href="13842.php">christophe petit: "[OMPI users] MPIRUN Error on Mac pro i7 laptop and linux desktop"</a>
<li><strong>In reply to:</strong> <a href="13842.php">christophe petit: "[OMPI users] MPIRUN Error on Mac pro i7 laptop and linux desktop"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13844.php">Jeff Squyres: "Re: [OMPI users] MPIRUN Error on Mac pro i7 laptop and linux desktop"</a>
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
