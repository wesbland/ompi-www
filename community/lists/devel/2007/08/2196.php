<? include("../../include/msg-header.inc"); ?>
<!-- received="Sun Aug 19 18:49:43 2007" -->
<!-- isoreceived="20070819224943" -->
<!-- sent="Sun, 19 Aug 2007 18:49:34 -0400" -->
<!-- isosent="20070819224934" -->
<!-- name="Tim Prins" -->
<!-- email="tprins_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [devel-core] [RFC] Runtime Services Layer" -->
<!-- id="200708191849.34402.tprins_at_cs.indiana.edu" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="B1E6BE38-8535-44E7-92CC-F188D017FE8C_at_cisco.com" -->
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
<strong>From:</strong> Tim Prins (<em>tprins_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-08-19 18:49:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2197.php">Tim Prins: "Re: [OMPI devel] [devel-core] [RFC] Runtime Services Layer"</a>
<li><strong>Previous message:</strong> <a href="2195.php">Manuel Prinz: "Re: [OMPI devel] Question on NX bit patch in Debian"</a>
<li><strong>In reply to:</strong> <a href="2180.php">Jeff Squyres: "Re: [OMPI devel] [devel-core] [RFC] Runtime Services Layer"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2197.php">Tim Prins: "Re: [OMPI devel] [devel-core] [RFC] Runtime Services Layer"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Friday 17 August 2007 08:40:01 am Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; I am definitely interested to see what the RSL turns out to be; I
</span><br>
<span class="quotelev1">&gt; think it has many potential benefits.  There are also some obvious
</span><br>
<span class="quotelev1">&gt; issues to be worked out (e.g., mpirun and friends).
</span><br>
Yeah, thinking through this and talking to others, it seems like the best way 
<br>
to deal with this is to say that mpirun points to our default runtime (orte), 
<br>
and that to use any other rsl component, you have to use that system's 
<br>
specific launcher (could be a 'srun', or a 'mpirun-foobar', whatever the 
<br>
system wants to do).
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; As for whether this should go in v1.3, I don't know if it's possible
</span><br>
<span class="quotelev1">&gt; to say yet -- it will depend on when RSL becomes [at least close to]
</span><br>
<span class="quotelev1">&gt; ready, what the exact schedule for v1.3 is (which we've been skittish
</span><br>
<span class="quotelev1">&gt; to define, since we're going for a feature-driven release), etc.
</span><br>
<p>I agree that it is impossible to say right now, but wanted to throw it out 
<br>
there for people to consider/think about. 
<br>
<p>Tim
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Aug 16, 2007, at 9:47 PM, Tim Prins wrote:
</span><br>
<span class="quotelev2">&gt; &gt; WHAT: Solicitation of feedback on the possibility of adding a runtime
</span><br>
<span class="quotelev2">&gt; &gt; services layer to Open MPI to abstract out the runtime.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; WHY: To solidify the interface between OMPI and the runtime
</span><br>
<span class="quotelev2">&gt; &gt; environment,
</span><br>
<span class="quotelev2">&gt; &gt; and to allow the use of different runtime systems, including different
</span><br>
<span class="quotelev2">&gt; &gt; versions of ORTE.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; WHERE: Addition of a new framework to OMPI, and changes to many of the
</span><br>
<span class="quotelev2">&gt; &gt; files in OMPI to funnel all runtime request through this framework.
</span><br>
<span class="quotelev2">&gt; &gt; Few
</span><br>
<span class="quotelev2">&gt; &gt; changes should be required in OPAL and ORTE.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; WHEN: Development has started in tmp/rsl, but is still in its
</span><br>
<span class="quotelev2">&gt; &gt; infancy. We hope
</span><br>
<span class="quotelev2">&gt; &gt; to have a working system in the next month.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; TIMEOUT: 8/29/07
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; ------
</span><br>
<span class="quotelev2">&gt; &gt; Short version:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I am working on creating an interface between OMPI and the runtime
</span><br>
<span class="quotelev2">&gt; &gt; system.
</span><br>
<span class="quotelev2">&gt; &gt; This would make a RSL framework in OMPI which all runtime services
</span><br>
<span class="quotelev2">&gt; &gt; would be
</span><br>
<span class="quotelev2">&gt; &gt; accessed from. Attached is a graphic depicting this.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; This change would be invasive to the OMPI layer. Few (if any) changes
</span><br>
<span class="quotelev2">&gt; &gt; will be required of the ORTE and OPAL layers.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; At this point I am soliciting feedback as to whether people are
</span><br>
<span class="quotelev2">&gt; &gt; supportive or not of this change both in general and for v1.3.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Long version:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; The current model used in Open MPI assumes that one runtime system is
</span><br>
<span class="quotelev2">&gt; &gt; the best for all environments. However, in many environments it may be
</span><br>
<span class="quotelev2">&gt; &gt; beneficial to have specialized runtime systems. With our current
</span><br>
<span class="quotelev2">&gt; &gt; system this
</span><br>
<span class="quotelev2">&gt; &gt; is not easy to do.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; With this in mind, the idea of creating a 'runtime services layer' was
</span><br>
<span class="quotelev2">&gt; &gt; hatched. This would take the form of a framework within OMPI,
</span><br>
<span class="quotelev2">&gt; &gt; through which
</span><br>
<span class="quotelev2">&gt; &gt; all runtime functionality would be accessed. This would allow new or
</span><br>
<span class="quotelev2">&gt; &gt; different runtime systems to be used with Open MPI. Additionally,
</span><br>
<span class="quotelev2">&gt; &gt; with such a
</span><br>
<span class="quotelev2">&gt; &gt; system it would be possible to have multiple versions of open rte
</span><br>
<span class="quotelev2">&gt; &gt; coexisting,
</span><br>
<span class="quotelev2">&gt; &gt; which may facilitate development and testing. Finally, this would
</span><br>
<span class="quotelev2">&gt; &gt; solidify the
</span><br>
<span class="quotelev2">&gt; &gt; interface between OMPI and the runtime system, as well as provide
</span><br>
<span class="quotelev2">&gt; &gt; documentation and side effects of each interface function.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; However, such a change would be fairly invasive to the OMPI layer, and
</span><br>
<span class="quotelev2">&gt; &gt; needs a buy-in from everyone for it to be possible.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Here is a summary of the changes required for the RSL (at least how
</span><br>
<span class="quotelev2">&gt; &gt; it is
</span><br>
<span class="quotelev2">&gt; &gt; currently envisioned):
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; 1. Add a framework to ompi for the rsl, and a component to support
</span><br>
<span class="quotelev2">&gt; &gt; orte.
</span><br>
<span class="quotelev2">&gt; &gt; 2. Change ompi so that it uses the new interface. This involves:
</span><br>
<span class="quotelev2">&gt; &gt;          a. Moving runtime specific code into the orte rsl component.
</span><br>
<span class="quotelev2">&gt; &gt;          b. Changing the process names in ompi to an opaque object.
</span><br>
<span class="quotelev2">&gt; &gt;          c. change all references to orte in ompi to be to the rsl.
</span><br>
<span class="quotelev2">&gt; &gt; 3. Change the configuration code so that open-rte is only linked
</span><br>
<span class="quotelev2">&gt; &gt; where needed.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Of course, all this would happen on a tmp branch.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; The design of the rsl is not solidified. I have been playing in a
</span><br>
<span class="quotelev2">&gt; &gt; tmp branch
</span><br>
<span class="quotelev2">&gt; &gt; (located at <a href="https://svn.open-mpi.org/svn/ompi/tmp/rsl">https://svn.open-mpi.org/svn/ompi/tmp/rsl</a>) which
</span><br>
<span class="quotelev2">&gt; &gt; everyone is
</span><br>
<span class="quotelev2">&gt; &gt; welcome to look at and comment on, but be advised that things here are
</span><br>
<span class="quotelev2">&gt; &gt; subject to change (I don't think it even compiles right now). There
</span><br>
<span class="quotelev2">&gt; &gt; are
</span><br>
<span class="quotelev2">&gt; &gt; some fairly large open questions on this, including:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; 1. How to handle mpirun (that is, when a user types 'mpirun', do they
</span><br>
<span class="quotelev2">&gt; &gt; always get ORTE, or do they sometimes get a system specific
</span><br>
<span class="quotelev2">&gt; &gt; runtime). Most
</span><br>
<span class="quotelev2">&gt; &gt; likely mpirun will always use ORTE, and alternative launching
</span><br>
<span class="quotelev2">&gt; &gt; programs would
</span><br>
<span class="quotelev2">&gt; &gt; be used for other runtimes.
</span><br>
<span class="quotelev2">&gt; &gt; 2. Whether there will be any performance implications. My guess is
</span><br>
<span class="quotelev2">&gt; &gt; not,
</span><br>
<span class="quotelev2">&gt; &gt; but am not quite sure of this yet.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Again, I am interested in people's comments on whether they think
</span><br>
<span class="quotelev2">&gt; &gt; adding
</span><br>
<span class="quotelev2">&gt; &gt; such abstraction is good or not, and whether it is reasonable to do
</span><br>
<span class="quotelev2">&gt; &gt; such a
</span><br>
<span class="quotelev2">&gt; &gt; thing for v1.3.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thanks,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Tim Prins
</span><br>
<span class="quotelev2">&gt; &gt; &lt;RSL-Diagram.pdf&gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel-core mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel-core_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel-core">http://www.open-mpi.org/mailman/listinfo.cgi/devel-core</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2197.php">Tim Prins: "Re: [OMPI devel] [devel-core] [RFC] Runtime Services Layer"</a>
<li><strong>Previous message:</strong> <a href="2195.php">Manuel Prinz: "Re: [OMPI devel] Question on NX bit patch in Debian"</a>
<li><strong>In reply to:</strong> <a href="2180.php">Jeff Squyres: "Re: [OMPI devel] [devel-core] [RFC] Runtime Services Layer"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2197.php">Tim Prins: "Re: [OMPI devel] [devel-core] [RFC] Runtime Services Layer"</a>
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
