<?
$subject_val = "Re: [OMPI users] MPI_Finalize() maintains load at 100%.";
include("../../include/msg-header.inc");
?>
<!-- received="Fri May 23 15:08:09 2014" -->
<!-- isoreceived="20140523190809" -->
<!-- sent="Fri, 23 May 2014 12:08:05 -0700" -->
<!-- isosent="20140523190805" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Finalize() maintains load at 100%." -->
<!-- id="D138850F-0A3E-40D1-A083-ABE0C5BD1C1E_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="01B8E103-DB2D-4AE4-9BCF-B8540C5B3B9E_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI_Finalize() maintains load at 100%.<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-05-23 15:08:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24473.php">Maxime Boissonneault: "[OMPI users] Advices for parameter tuning for CUDA-aware MPI"</a>
<li><strong>Previous message:</strong> <a href="24471.php">Ralph Castain: "Re: [OMPI users] MPI_Finalize() maintains load at 100%."</a>
<li><strong>In reply to:</strong> <a href="24471.php">Ralph Castain: "Re: [OMPI users] MPI_Finalize() maintains load at 100%."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24474.php">Jeff Squyres (jsquyres): "Re: [OMPI users] MPI_Finalize() maintains load at 100%."</a>
<li><strong>Reply:</strong> <a href="24474.php">Jeff Squyres (jsquyres): "Re: [OMPI users] MPI_Finalize() maintains load at 100%."</a>
<li><strong>Reply:</strong> <a href="24480.php">Iván Cores González: "Re: [OMPI users] MPI_Finalize() maintains load at 100%."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hmmm...okay, good news and bad news :-)
<br>
<p>Good news: this works fine on 1.8, so I'd suggest updating to that release series (either 1.8.1 or the nightly 1.8.2)
<br>
<p>Bad news: if one proc is going to exit without calling Finalize, they all need to do so else you will hang in Finalize. The problem is that Finalize invokes a barrier, and some of the procs aren't there any more to participate.
<br>
<p><p>On May 23, 2014, at 12:03 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I'll check to see - should be working
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On May 23, 2014, at 8:07 AM, Iv&#225;n Cores Gonz&#225;lez &lt;ivan.coresg_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I assume you mean have them exit without calling MPI_Finalize ...
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Yes, thats my idea, exit some processes while the others continue. I am trying to 
</span><br>
<span class="quotelev2">&gt;&gt; use the &quot;orte_allowed_exit_without_sync&quot; flag in the next code (note that the code
</span><br>
<span class="quotelev2">&gt;&gt; is different):
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; int main( int argc, char *argv[] )
</span><br>
<span class="quotelev2">&gt;&gt; {
</span><br>
<span class="quotelev2">&gt;&gt;   	MPI_Init(&amp;argc, &amp;argv);
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;   	int myid;
</span><br>
<span class="quotelev2">&gt;&gt;   	MPI_Comm_rank(MPI_COMM_WORLD, &amp;myid);
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;   	if (myid == 0)
</span><br>
<span class="quotelev2">&gt;&gt;  	{	
</span><br>
<span class="quotelev2">&gt;&gt;  		printf(&quot;Exit P0 ...\n&quot;);
</span><br>
<span class="quotelev2">&gt;&gt;   		//With &quot;--mca orte_allowed_exit_without_sync 1&quot; this
</span><br>
<span class="quotelev2">&gt;&gt;   		//process should die, but not P1, P2 ... , is ok?
</span><br>
<span class="quotelev2">&gt;&gt;    		exit(0);
</span><br>
<span class="quotelev2">&gt;&gt;  	 }
</span><br>
<span class="quotelev2">&gt;&gt;       	
</span><br>
<span class="quotelev2">&gt;&gt;       //Imagine some important job here
</span><br>
<span class="quotelev2">&gt;&gt;  	sleep(20);
</span><br>
<span class="quotelev2">&gt;&gt;  			
</span><br>
<span class="quotelev2">&gt;&gt;   	printf(&quot;Calling MPI_Finalize() ...\n&quot;);
</span><br>
<span class="quotelev2">&gt;&gt;   	// Process 0 maintain load at 100%.
</span><br>
<span class="quotelev2">&gt;&gt;   	MPI_Finalize();
</span><br>
<span class="quotelev2">&gt;&gt;   	return 0;
</span><br>
<span class="quotelev2">&gt;&gt; }
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; and the cmd:
</span><br>
<span class="quotelev2">&gt;&gt; mpirun --mca orte_allowed_exit_without_sync 1 -hostfile ./hostfile -np 2 --prefix /share/apps/openmpi/gcc/ib/1.7.2 ./a.out
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; But it does not work, all job fails in the &quot;exit(0)&quot; call. Maybe I don't undertand your response...
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Sorry for not response in order, I have some problems with my 
</span><br>
<span class="quotelev2">&gt;&gt; e-mail receiving the Open-MPI mails. 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; In my codes, I am using MPI_Send and MPI_Recv functions to notify P0 that
</span><br>
<span class="quotelev3">&gt;&gt;&gt; every other process have finished their own calculations. Maybe you cal
</span><br>
<span class="quotelev3">&gt;&gt;&gt; also use the same method and keep P0 in waiting until it receives some data
</span><br>
<span class="quotelev3">&gt;&gt;&gt; from other processes? 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; This solution was my first idea, but I can't do it. I use spawned processes and
</span><br>
<span class="quotelev2">&gt;&gt; different communicators for manage &quot;groups&quot; of processes, so the ideal behaviour
</span><br>
<span class="quotelev2">&gt;&gt; is that processes finished and died (or at least don't stay at 100% load) when
</span><br>
<span class="quotelev2">&gt;&gt; their finish their work. Its a bit hard to explain. 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; ----- Mensaje original -----
</span><br>
<span class="quotelev2">&gt;&gt; De: &quot;Ralph Castain&quot; &lt;rhc_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Para: &quot;Open MPI Users&quot; &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Enviados: Viernes, 23 de Mayo 2014 16:39:34
</span><br>
<span class="quotelev2">&gt;&gt; Asunto: Re: [OMPI users] MPI_Finalize() maintains load at 100%.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On May 23, 2014, at 7:21 AM, Iv&#225;n Cores Gonz&#225;lez &lt;ivan.coresg_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi Ralph,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks for your response. 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I see your point, I try to change the algorithm but some processes finish while the others are still calling MPI functions. I can't avoid this behaviour. 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The ideal behavior is the processes go to sleep (or don't use the 100% of load) when the MPI_Finalize is called.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; For the time being maybe the fastest solution is instert a &quot;manual&quot; sleep before the MPI_Finalize.  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Another question, Could be possible kill some MPI processes and avoid that the mpirun fails? Or this behaviuor is impossible?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I assume you mean have them exit without calling MPI_Finalize, so they don't block? Technically, yes, though we wouldn't recommend that behavior. You can add &quot;-mca orte_allowed_exit_without_sync 1&quot; to your cmd line (or set the mca param in your environment, etc.) and mpirun won't terminate you if a proc exits without calling MPI_Finalize. We will still, however, terminate the job if (a) a proc dies by signal (e.g., segfaults), or (b) a proc exits with a non-zero status, so you'll still have some protection from hangs.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ivan Cores
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24473.php">Maxime Boissonneault: "[OMPI users] Advices for parameter tuning for CUDA-aware MPI"</a>
<li><strong>Previous message:</strong> <a href="24471.php">Ralph Castain: "Re: [OMPI users] MPI_Finalize() maintains load at 100%."</a>
<li><strong>In reply to:</strong> <a href="24471.php">Ralph Castain: "Re: [OMPI users] MPI_Finalize() maintains load at 100%."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24474.php">Jeff Squyres (jsquyres): "Re: [OMPI users] MPI_Finalize() maintains load at 100%."</a>
<li><strong>Reply:</strong> <a href="24474.php">Jeff Squyres (jsquyres): "Re: [OMPI users] MPI_Finalize() maintains load at 100%."</a>
<li><strong>Reply:</strong> <a href="24480.php">Iván Cores González: "Re: [OMPI users] MPI_Finalize() maintains load at 100%."</a>
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
