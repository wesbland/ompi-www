<?
$subject_val = "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25015";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug  8 19:59:03 2011" -->
<!-- isoreceived="20110808235903" -->
<!-- sent="Mon, 8 Aug 2011 17:58:56 -0600" -->
<!-- isosent="20110808235856" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25015" -->
<!-- id="2FE4A54E-D66E-4F09-8949-790896614C1C_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="C3747659-5387-4D26-AAF6-539515C63477_at_gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25015<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-08-08 19:58:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9632.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25015"</a>
<li><strong>Previous message:</strong> <a href="9630.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25015"</a>
<li><strong>In reply to:</strong> <a href="9626.php">Thomas Herault: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25015"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9630.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25015"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Aug 8, 2011, at 1:23 PM, Thomas Herault wrote:
<br>
<p><span class="quotelev1">&gt; proc_get_epoch( proc );
</span><br>
<span class="quotelev1">&gt; calls ORTE_NAME_PRINT(proc)
</span><br>
<span class="quotelev1">&gt; when in debug mode.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; When this is the case, ORTE_NAME_PRINT prints all fields of proc, including epoch. So, proc-&gt;epoch = proc_get_epoch(proc) triggers the valgrind warning, because of the print, in debug mode.
</span><br>
<span class="quotelev1">&gt; This is the only reason why proc-&gt;epoch must be initialized before calling proc-&gt;epoch = proc_get_epoch( proc );
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I agree with you it's not a good approach, for coding style / avoiding this kind of discussions.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Alternative approaches include:
</span><br>
<span class="quotelev1">&gt; - having proc_get_epoch have a side effect on proc-&gt;epoch instead of returning the correct epoch value. Assignment can then be done before the debug message. But this is inconsistent with the rest of the interface used in proc_name_fns;
</span><br>
<span class="quotelev1">&gt; - having proc_get_epoch use another helper than ORTE_NAME_PRINT to print the debug info. But this requires coding an alternative ORTE_SOMETHING_PRINT function, only for this use;
</span><br>
<span class="quotelev1">&gt; - having proc be defined as an opal_object, and set epoch to INVALID (or even UNSET) into the constructor. This could induce changes at many places, and there is always the risk that some changes are left incomplete.
</span><br>
<p>Just an FYI here. We have had the discussion of converting orte_process_name_t to an opal_object several times. The biggest reason for not doing so is that the memory consumed by the opal_object_t itself is actually greater than the memory used by the name fields. Since we store a lot of process names, this results in a lot of overhead memory loss.
<br>
<p>However, we do have the problem of names not being initialized, and this has caused trouble a number of times over the last few years. So maybe it would be worth the footprint to resolve the problem once and for all?
<br>
<p>Something we should discuss, methinks.
<br>
<p><p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thomas
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Le 8 ao&#251;t 2011 &#224; 12:20, Barrett, Brian W a &#233;crit :
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Ok, that makes some sense.  It's a really weird way of doing
</span><br>
<span class="quotelev2">&gt;&gt; initialization, though.  Some of it is probably how Ralph chose to share
</span><br>
<span class="quotelev2">&gt;&gt; nidpid map code, so perhaps it's unavoidable.  But since the name isn't
</span><br>
<span class="quotelev2">&gt;&gt; use in proc_get_epoch() (or, better not be used in there), I'm not
</span><br>
<span class="quotelev2">&gt;&gt; entirely sure why that made valgrind happy...
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Brian
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On 8/8/11 9:53 AM, &quot;Wesley Bland&quot; &lt;wbland_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; It's not just copying the value from one to the other.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The value is initialized on the first line. The proc_name is passed into
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the function where the jobid and vpid are used (not the epoch). The
</span><br>
<span class="quotelev3">&gt;&gt;&gt; function returns a new (the correct) value for the epoch based on the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; passed in jobid and vpid which is assigned to the process name.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This is the same thing as initializing the value to NULL. We do that all
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the time to avoid compiler warnings. I just can't do that here because
</span><br>
<span class="quotelev3">&gt;&gt;&gt; this isn't a pointer. If it would make the code look better I can move
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the first assignment to the top of the function where the other
</span><br>
<span class="quotelev3">&gt;&gt;&gt; initializations are.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Mon, Aug 8, 2011 at 11:41 AM, Barrett, Brian W &lt;bwbarre_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On 8/8/11 9:34 AM, &quot;Jeff Squyres&quot; &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Aug 8, 2011, at 11:30 AM, Wesley Bland wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; The reason is because valgrind was complaining about uninitialized
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; values that were passed into proc_get_epoch. I saw the same warnings
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; from valgrind when I ran it. I added the code to initialize the values
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; to what really should be the default value and the warnings went away.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Since the process_name_t struct isn't an object, it doesn't have an
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; initialization function like so many of the other objects in the code.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; This is what we have.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Ah, I see -- you are passing peer_name into proc_get_epoch().  I missed
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; that.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Thanks!
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;   peer_name.jobid  = ORTE_PROC_MY_NAME-&gt;jobid;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;   peer_name.vpid   = peer_idx;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; +    peer_name.epoch  = ORTE_EPOCH_INVALID;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;   peer_name.epoch  = orte_ess.proc_get_epoch(&amp;peer_name);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I'm still not convinced this is a rational coding style.  It seems to me
</span><br>
<span class="quotelev3">&gt;&gt;&gt; that if you're just going to copy the epoch from peer_name to peer_name,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; just assign the epoch to INVALID and be done with it.  There's no need for
</span><br>
<span class="quotelev3">&gt;&gt;&gt; both the assignment added in this patch and the line after it.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Now, normally I'd say that this is fixing a bug and having to fix other
</span><br>
<span class="quotelev3">&gt;&gt;&gt; people's bad code shouldn't be your problem.  But since you wrote both
</span><br>
<span class="quotelev3">&gt;&gt;&gt; lines, fixing it to make sense seems reasonable to me ;).
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Brian
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Brian W. Barrett
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Dept. 1423: Scalable System Software
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Sandia National Laboratories
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Brian W. Barrett
</span><br>
<span class="quotelev2">&gt;&gt; Dept. 1423: Scalable System Software
</span><br>
<span class="quotelev2">&gt;&gt; Sandia National Laboratories
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
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
<li><strong>Next message:</strong> <a href="9632.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25015"</a>
<li><strong>Previous message:</strong> <a href="9630.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25015"</a>
<li><strong>In reply to:</strong> <a href="9626.php">Thomas Herault: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25015"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9630.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25015"</a>
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
