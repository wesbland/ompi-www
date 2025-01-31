<?
$subject_val = "Re: [OMPI users] Shared Memory Performance Problem.";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar 28 06:26:48 2011" -->
<!-- isoreceived="20110328102648" -->
<!-- sent="Mon, 28 Mar 2011 12:26:43 +0200" -->
<!-- isosent="20110328102643" -->
<!-- name="Michele Marena" -->
<!-- email="michelemarena_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Shared Memory Performance Problem." -->
<!-- id="AANLkTimur6kfAAX5GCKsO05H15NCgRQjzXUDhhu-xrL-_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="3DB9EAE2-7432-4540-A71C-20B5A46B45B4_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Shared Memory Performance Problem.<br>
<strong>From:</strong> Michele Marena (<em>michelemarena_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-03-28 06:26:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16028.php">Michele Marena: "Re: [OMPI users] Shared Memory Performance Problem."</a>
<li><strong>Previous message:</strong> <a href="16026.php">Jeff Squyres: "Re: [OMPI users] OMPI error terminate w/o reasons"</a>
<li><strong>In reply to:</strong> <a href="16023.php">Jeff Squyres: "Re: [OMPI users] Shared Memory Performance Problem."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16028.php">Michele Marena: "Re: [OMPI users] Shared Memory Performance Problem."</a>
<li><strong>Reply:</strong> <a href="16028.php">Michele Marena: "Re: [OMPI users] Shared Memory Performance Problem."</a>
<li><strong>Reply:</strong> <a href="16029.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Shared Memory Performance Problem."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
However, I thank you Tim, Ralh and Jeff.
<br>
My sequential application runs in 24s (wall clock time).
<br>
My parallel application runs in 13s with two processes on different nodes.
<br>
With shared memory, when two processes are on the same node, my app runs in
<br>
23s.
<br>
I'm not understand why.
<br>
<p>2011/3/28 Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
<br>
<p><span class="quotelev1">&gt; If your program runs faster across 3 processes, 2 of which are local to
</span><br>
<span class="quotelev1">&gt; each other, with --mca btl tcp,self compared to --mca btl tcp,sm,self, then
</span><br>
<span class="quotelev1">&gt; something is very, very strange.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Tim cites all kinds of things that can cause slowdowns, but it's still
</span><br>
<span class="quotelev1">&gt; very, very odd that simply enabling using the shared memory communications
</span><br>
<span class="quotelev1">&gt; channel in Open MPI *slows your overall application down*.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; How much does your application slow down in wall clock time?  Seconds?
</span><br>
<span class="quotelev1">&gt;  Minutes?  Hours?  (anything less than 1 second is in the noise)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mar 27, 2011, at 10:33 AM, Ralph Castain wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Mar 27, 2011, at 7:37 AM, Tim Prince wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; On 3/27/2011 2:26 AM, Michele Marena wrote:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; My application performs good without shared memory utilization, but
</span><br>
<span class="quotelev1">&gt; with
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; shared memory I get performance worst than without of it.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Do I make a mistake? Don't I pay attention to something?
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; I know OpenMPI uses /tmp directory to allocate shared memory and it is
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; in the local filesystem.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I guess you mean shared memory message passing.   Among relevant
</span><br>
<span class="quotelev1">&gt; parameters may be the message size where your implementation switches from
</span><br>
<span class="quotelev1">&gt; cached copy to non-temporal (if you are on a platform where that terminology
</span><br>
<span class="quotelev1">&gt; is used).  If built with Intel compilers, for example, the copy may be
</span><br>
<span class="quotelev1">&gt; performed by intel_fast_memcpy, with a default setting which uses
</span><br>
<span class="quotelev1">&gt; non-temporal when the message exceeds about some preset size, e.g. 50% of
</span><br>
<span class="quotelev1">&gt; smallest L2 cache for that architecture.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; A quick search for past posts seems to indicate that OpenMPI doesn't
</span><br>
<span class="quotelev1">&gt; itself invoke non-temporal, but there appear to be several useful articles
</span><br>
<span class="quotelev1">&gt; not connected with OpenMPI.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; In case guesses aren't sufficient, it's often necessary to profile
</span><br>
<span class="quotelev1">&gt; (gprof, oprofile, Vtune, ....) to pin this down.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; If shared message slows your application down, the question is whether
</span><br>
<span class="quotelev1">&gt; this is due to excessive eviction of data from cache; not a simple question,
</span><br>
<span class="quotelev1">&gt; as most recent CPUs have 3 levels of cache, and your application may require
</span><br>
<span class="quotelev1">&gt; more or less data which was in use prior to the message receipt, and may use
</span><br>
<span class="quotelev1">&gt; immediately only a small piece of a large message.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; There were several papers published in earlier years about shared memory
</span><br>
<span class="quotelev1">&gt; performance in the 1.2 series.There were known problems with that
</span><br>
<span class="quotelev1">&gt; implementation, which is why it was heavily revised for the 1.3/4 series.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; You might also look at the following links, though much of it has been
</span><br>
<span class="quotelev1">&gt; updated to the 1.3/4 series as we don't really support 1.2 any more:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/faq/?category=sm">http://www.open-mpi.org/faq/?category=sm</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/faq/?category=perftools">http://www.open-mpi.org/faq/?category=perftools</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; --
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Tim Prince
</span><br>
<span class="quotelev3">&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-16027/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16028.php">Michele Marena: "Re: [OMPI users] Shared Memory Performance Problem."</a>
<li><strong>Previous message:</strong> <a href="16026.php">Jeff Squyres: "Re: [OMPI users] OMPI error terminate w/o reasons"</a>
<li><strong>In reply to:</strong> <a href="16023.php">Jeff Squyres: "Re: [OMPI users] Shared Memory Performance Problem."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16028.php">Michele Marena: "Re: [OMPI users] Shared Memory Performance Problem."</a>
<li><strong>Reply:</strong> <a href="16028.php">Michele Marena: "Re: [OMPI users] Shared Memory Performance Problem."</a>
<li><strong>Reply:</strong> <a href="16029.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Shared Memory Performance Problem."</a>
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
