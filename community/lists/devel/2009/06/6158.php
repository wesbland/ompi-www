<?
$subject_val = "Re: [OMPI devel] opal / fortran / Flogical";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun  1 13:23:20 2009" -->
<!-- isoreceived="20090601172320" -->
<!-- sent="Mon, 1 Jun 2009 13:23:15 -0400 (EDT)" -->
<!-- isosent="20090601172315" -->
<!-- name="Brian W. Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] opal / fortran / Flogical" -->
<!-- id="alpine.DEB.1.10.0906011322020.26546_at_marvin.we-be-smart.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="200906011108.58104.keller_at_ornl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] opal / fortran / Flogical<br>
<strong>From:</strong> Brian W. Barrett (<em>brbarret_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-06-01 13:23:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6159.php">Jeff Squyres: "[OMPI devel] 1.3 branch ob1 brokenness"</a>
<li><strong>Previous message:</strong> <a href="6157.php">Rainer Keller: "Re: [OMPI devel] opal / fortran / Flogical"</a>
<li><strong>In reply to:</strong> <a href="6157.php">Rainer Keller: "Re: [OMPI devel] opal / fortran / Flogical"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6162.php">Jeff Squyres: "Re: [OMPI devel] opal / fortran / Flogical"</a>
<li><strong>Reply:</strong> <a href="6162.php">Jeff Squyres: "Re: [OMPI devel] opal / fortran / Flogical"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Well, this may just be another sign that the push of the DDT to OPAL is a 
<br>
bad idea.  That's been my opinion from the start, so I'm biased.  But OPAL 
<br>
was intended to be single process systems portability, not MPI crud.
<br>
<p>Brian
<br>
<p>On Mon, 1 Jun 2009, Rainer Keller wrote:
<br>
<p><span class="quotelev1">&gt; Hmm, OK, I see.
</span><br>
<span class="quotelev1">&gt; However, I do see potentially a problem with work getting ddt on the OPAL
</span><br>
<span class="quotelev1">&gt; layer when we do have a fortran compiler with different alignment requirements
</span><br>
<span class="quotelev1">&gt; for the same-sized basic types...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; As far as I understand the OPAL layer to abstract away from underlying system
</span><br>
<span class="quotelev1">&gt; portability, libc-quirks, and compiler information.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; But I am perfectly fine with reverting this!
</span><br>
<span class="quotelev1">&gt; Let's discuss, maybe phone?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Rainer
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Monday 01 June 2009 10:38:51 am Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Hmm.  I'm not sure that I like this commit.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; George, Brian, and I specifically kept Fortran out of (the non-
</span><br>
<span class="quotelev2">&gt;&gt; generated code in) opal because the MPI layer is the *only* layer that
</span><br>
<span class="quotelev2">&gt;&gt; uses Fortran.  There was one or two minor abstraction breaks (you
</span><br>
<span class="quotelev2">&gt;&gt; cited opal/util/arch.c), but now we have Fortran all throughout Opal.
</span><br>
<span class="quotelev2">&gt;&gt; Hmmm...  :-\
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Is MPI_Flogical a real type?  I don't see it defined in the MPI-2.2
</span><br>
<span class="quotelev2">&gt;&gt; latex sources, but I could be missing it.  I *thought* we used
</span><br>
<span class="quotelev2">&gt;&gt; ompi_fortran_logical_t internally because there was no officially
</span><br>
<span class="quotelev2">&gt;&gt; sanctioned MPI_&lt;foo&gt; type for it...?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On May 30, 2009, at 11:54 AM, &lt;rusraink_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &lt;rusraink_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Author: rusraink
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Date: 2009-05-30 11:54:29 EDT (Sat, 30 May 2009)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; New Revision: 21330
</span><br>
<span class="quotelev3">&gt;&gt;&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/21330">https://svn.open-mpi.org/trac/ompi/changeset/21330</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Log:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  - Move alignment and size output generated by configure-tests
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    into the OPAL namespace, eliminating cases like opal/util/arch.c
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    testing for ompi_fortran_logical_t.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    As this is processor- and compiler-related information
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    (e.g. does the compiler/architecture support REAL*16)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    this should have been on the OPAL layer.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  - Unifies f77 code using MPI_Flogical instead of
</span><br>
<span class="quotelev3">&gt;&gt;&gt; opal_fortran_logical_t
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  - Tested locally (Linux/x86-64) with mpich and intel testsuite
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    but would like to get this week-ends MTT output
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  - PLEASE NOTE: configure-internal macro-names and
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    ompi_cv_ variables have not been changed, so that
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    external platform (not in contrib/) files still work.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Text files modified:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    trunk/config/
</span><br>
<span class="quotelev3">&gt;&gt;&gt; f77_check.m4                                                |    20
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    trunk/config/
</span><br>
<span class="quotelev3">&gt;&gt;&gt; f77_check_logical_array.m4                                  |     6
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    trunk/config/
</span><br>
<span class="quotelev3">&gt;&gt;&gt; f77_check_real16_c_equiv.m4                                 |    14
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    trunk/config/
</span><br>
<span class="quotelev3">&gt;&gt;&gt; f77_get_fortran_handle_max.m4                               |     4
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    trunk/config/
</span><br>
<span class="quotelev3">&gt;&gt;&gt; f77_get_value_true.m4                                       |    14
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    trunk/config/
</span><br>
<span class="quotelev3">&gt;&gt;&gt; f77_purge_unsupported_kind.m4                               |     8
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    trunk/config/
</span><br>
<span class="quotelev3">&gt;&gt;&gt; f90_check.m4                                                |    10
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    trunk/
</span><br>
<span class="quotelev3">&gt;&gt;&gt; configure.ac
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; |    20
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    trunk/contrib/platform/win32/CMakeModules/
</span><br>
<span class="quotelev3">&gt;&gt;&gt; f77_check.cmake                |    24
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    trunk/contrib/platform/win32/CMakeModules/
</span><br>
<span class="quotelev3">&gt;&gt;&gt; f77_check_real16_c_equiv.cmake |    12
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    trunk/contrib/platform/win32/CMakeModules/
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ompi_configure.cmake           |   154 ++++----
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    trunk/contrib/platform/win32/ConfigFiles/
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpi.h.cmake                     |    96 ++--
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    trunk/contrib/platform/win32/ConfigFiles/
</span><br>
<span class="quotelev3">&gt;&gt;&gt; opal_config.h.cmake             |   222 ++++++------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    trunk/ompi/attribute/
</span><br>
<span class="quotelev3">&gt;&gt;&gt; attribute.c                                         |     6
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    trunk/ompi/attribute/
</span><br>
<span class="quotelev3">&gt;&gt;&gt; attribute.h                                         |     4
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    trunk/ompi/communicator/
</span><br>
<span class="quotelev3">&gt;&gt;&gt; comm_init.c                                      |     2
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    trunk/ompi/datatype/
</span><br>
<span class="quotelev3">&gt;&gt;&gt; copy_functions.c                                     |    10
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    trunk/ompi/datatype/
</span><br>
<span class="quotelev3">&gt;&gt;&gt; copy_functions_heterogeneous.c                       |    14
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    trunk/ompi/datatype/
</span><br>
<span class="quotelev3">&gt;&gt;&gt; dt_module.c                                          |   224 +++++
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    trunk/ompi/errhandler/errcode-
</span><br>
<span class="quotelev3">&gt;&gt;&gt; internal.c                                 |     2
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    trunk/ompi/errhandler/
</span><br>
<span class="quotelev3">&gt;&gt;&gt; errcode.c                                          |     2
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    trunk/ompi/errhandler/
</span><br>
<span class="quotelev3">&gt;&gt;&gt; errhandler.c                                       |     2
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    trunk/ompi/file/
</span><br>
<span class="quotelev3">&gt;&gt;&gt; file.c                                                   |     2
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    trunk/ompi/group/
</span><br>
<span class="quotelev3">&gt;&gt;&gt; group_init.c                                            |     2
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    trunk/ompi/include/
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpi.h.in                                              |    96 ++--
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    trunk/ompi/include/
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ompi_config.h.in                                      |    48 +-
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    trunk/ompi/info/
</span><br>
<span class="quotelev3">&gt;&gt;&gt; info.c                                                   |     2
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    trunk/ompi/mca/op/base/
</span><br>
<span class="quotelev3">&gt;&gt;&gt; functions.h                                       |    56 +-
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    trunk/ompi/mca/op/base/
</span><br>
<span class="quotelev3">&gt;&gt;&gt; op_base_functions.c                               |   722 +++++++++++
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +++++++++--------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    trunk/ompi/mca/osc/base/
</span><br>
<span class="quotelev3">&gt;&gt;&gt; osc_base_obj_convert.c                           |     8
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    trunk/ompi/mpi/c/
</span><br>
<span class="quotelev3">&gt;&gt;&gt; type_create_f90_integer.c                               |     4
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    trunk/ompi/mpi/f77/base/
</span><br>
<span class="quotelev3">&gt;&gt;&gt; attr_fn_f.c                                      |    48 +-
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    trunk/ompi/mpi/f77/
</span><br>
<span class="quotelev3">&gt;&gt;&gt; file_read_all_end_f.c                                 |     6
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    trunk/ompi/mpi/f77/
</span><br>
<span class="quotelev3">&gt;&gt;&gt; file_read_all_f.c                                     |     6
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    trunk/ompi/mpi/f77/
</span><br>
<span class="quotelev3">&gt;&gt;&gt; file_read_at_all_end_f.c                              |     6
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    trunk/ompi/mpi/f77/
</span><br>
<span class="quotelev3">&gt;&gt;&gt; file_read_at_all_f.c                                  |     6
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    trunk/ompi/mpi/f77/
</span><br>
<span class="quotelev3">&gt;&gt;&gt; file_read_at_f.c                                      |     6
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    trunk/ompi/mpi/f77/
</span><br>
<span class="quotelev3">&gt;&gt;&gt; file_read_f.c                                         |     6
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    trunk/ompi/mpi/f77/
</span><br>
<span class="quotelev3">&gt;&gt;&gt; file_read_ordered_end_f.c                             |     6
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    trunk/ompi/mpi/f77/
</span><br>
<span class="quotelev3">&gt;&gt;&gt; file_read_ordered_f.c                                 |     6
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    trunk/ompi/mpi/f77/
</span><br>
<span class="quotelev3">&gt;&gt;&gt; file_read_shared_f.c                                  |     6
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    trunk/ompi/mpi/f77/
</span><br>
<span class="quotelev3">&gt;&gt;&gt; file_write_all_end_f.c                                |     6
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    trunk/ompi/mpi/f77/
</span><br>
<span class="quotelev3">&gt;&gt;&gt; file_write_all_f.c                                    |     6
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    trunk/ompi/mpi/f77/
</span><br>
<span class="quotelev3">&gt;&gt;&gt; file_write_at_all_end_f.c                             |     6
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    trunk/ompi/mpi/f77/
</span><br>
<span class="quotelev3">&gt;&gt;&gt; file_write_at_all_f.c                                 |     6
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    trunk/ompi/mpi/f77/
</span><br>
<span class="quotelev3">&gt;&gt;&gt; file_write_at_f.c                                     |     6
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    trunk/ompi/mpi/f77/
</span><br>
<span class="quotelev3">&gt;&gt;&gt; file_write_f.c                                        |     6
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    trunk/ompi/mpi/f77/
</span><br>
<span class="quotelev3">&gt;&gt;&gt; file_write_ordered_end_f.c                            |     6
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    trunk/ompi/mpi/f77/
</span><br>
<span class="quotelev3">&gt;&gt;&gt; file_write_ordered_f.c                                |     6
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    trunk/ompi/mpi/f77/
</span><br>
<span class="quotelev3">&gt;&gt;&gt; file_write_shared_f.c                                 |     6
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    trunk/ompi/mpi/f77/
</span><br>
<span class="quotelev3">&gt;&gt;&gt; fint_2_int.h                                          |    16
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    trunk/ompi/mpi/f77/
</span><br>
<span class="quotelev3">&gt;&gt;&gt; iprobe_f.c                                            |     6
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    trunk/ompi/mpi/f77/
</span><br>
<span class="quotelev3">&gt;&gt;&gt; probe_f.c                                             |     6
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    trunk/ompi/mpi/f77/
</span><br>
<span class="quotelev3">&gt;&gt;&gt; recv_f.c                                              |     6
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    trunk/ompi/mpi/f77/
</span><br>
<span class="quotelev3">&gt;&gt;&gt; testsome_f.c                                          |     4
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    trunk/ompi/mpi/f90/
</span><br>
<span class="quotelev3">&gt;&gt;&gt; fortran_sizes.h.in                                    |    64 +-
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    trunk/ompi/mpi/f90/scripts/
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpi_sizeof.f90.sh                             |    16
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    trunk/ompi/request/
</span><br>
<span class="quotelev3">&gt;&gt;&gt; request.c                                             |     2
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    trunk/ompi/tools/ompi_info/
</span><br>
<span class="quotelev3">&gt;&gt;&gt; param.cc                                      |    96 ++--
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    trunk/ompi/win/
</span><br>
<span class="quotelev3">&gt;&gt;&gt; win.c                                                     |     2
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    trunk/opal/class/
</span><br>
<span class="quotelev3">&gt;&gt;&gt; opal_bitmap.c                                           |     2
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    trunk/opal/class/
</span><br>
<span class="quotelev3">&gt;&gt;&gt; opal_bitmap.h                                           |     2
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    trunk/opal/class/
</span><br>
<span class="quotelev3">&gt;&gt;&gt; opal_pointer_array.c                                    |     4
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    trunk/opal/include/
</span><br>
<span class="quotelev3">&gt;&gt;&gt; opal_config_bottom.h                                  |    10
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    trunk/opal/util/
</span><br>
<span class="quotelev3">&gt;&gt;&gt; arch.c                                                   |     6
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    65 files changed, 1104 insertions(+), 1104 deletions(-)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Modified: trunk/config/f77_check.m4
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ======================================================================
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --- trunk/config/f77_check.m4   (original)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +++ trunk/config/f77_check.m4   2009-05-30 11:54:29 EDT (Sat, 30 May
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 2009)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -36,7 +36,7 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      ofc_have_type=0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      ofc_type_size=$ac_cv_sizeof_int
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      ofc_type_alignment=$ac_cv_sizeof_int
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -    ofc_c_type=ompi_fortran_bogus_type_t
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +    ofc_c_type=opal_fortran_bogus_type_t
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      # Only check if we actually want the F77 bindings / have a F77
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      # compiler.  This allows us to call this macro, even if there is
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -87,27 +87,27 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      # We always need these defines -- even if we don't have a given
</span><br>
<span class="quotelev3">&gt;&gt;&gt; type,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      # there are some places in the code where we have to have
</span><br>
<span class="quotelev3">&gt;&gt;&gt; *something*.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -
</span><br>
<span class="quotelev3">&gt;&gt;&gt; AC_DEFINE_UNQUOTED
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ([OMPI_HAVE_FORTRAN_]m4_bpatsubst(m4_bpatsubst([$1], [*], []), [[^a-
</span><br>
<span class="quotelev3">&gt;&gt;&gt; zA-Z0-9_]], [_]),
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +
</span><br>
<span class="quotelev3">&gt;&gt;&gt; AC_DEFINE_UNQUOTED
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ([OPAL_HAVE_FORTRAN_]m4_bpatsubst(m4_bpatsubst([$1], [*], []), [[^a-
</span><br>
<span class="quotelev3">&gt;&gt;&gt; zA-Z0-9_]], [_]),
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                         [$ofc_have_type],
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                         [Whether we have Fortran 77 $1 or not])
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -
</span><br>
<span class="quotelev3">&gt;&gt;&gt; AC_DEFINE_UNQUOTED
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ([OMPI_SIZEOF_FORTRAN_]m4_bpatsubst(m4_bpatsubst([$1], [*], []),
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [[^a-zA-Z0-9_]], [_]),
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +
</span><br>
<span class="quotelev3">&gt;&gt;&gt; AC_DEFINE_UNQUOTED
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ([OPAL_SIZEOF_FORTRAN_]m4_bpatsubst(m4_bpatsubst([$1], [*], []),
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [[^a-zA-Z0-9_]], [_]),
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                         [$ofc_type_size],
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                         [Size of Fortran 77 $1])
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -
</span><br>
<span class="quotelev3">&gt;&gt;&gt; AC_DEFINE_UNQUOTED
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ([OMPI_ALIGNMENT_FORTRAN_]m4_bpatsubst(m4_bpatsubst([$1], [*], []),
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [[^a-zA-Z0-9_]], [_]),
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +
</span><br>
<span class="quotelev3">&gt;&gt;&gt; AC_DEFINE_UNQUOTED
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ([OPAL_ALIGNMENT_FORTRAN_]m4_bpatsubst(m4_bpatsubst([$1], [*], []),
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [[^a-zA-Z0-9_]], [_]),
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                         [$ofc_type_alignment],
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                         [Alignment of Fortran 77 $1])
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      if test &quot;$3&quot; != &quot;&quot;; then
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -
</span><br>
<span class="quotelev3">&gt;&gt;&gt; AC_DEFINE_UNQUOTED
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ([ompi_fortran_]m4_translit(m4_bpatsubst(m4_bpatsubst([$1], [*],
</span><br>
<span class="quotelev3">&gt;&gt;&gt; []), [[^a-zA-Z0-9_]], [_]), [A-Z], [a-z])[_t],
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +
</span><br>
<span class="quotelev3">&gt;&gt;&gt; AC_DEFINE_UNQUOTED
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ([opal_fortran_]m4_translit(m4_bpatsubst(m4_bpatsubst([$1], [*],
</span><br>
<span class="quotelev3">&gt;&gt;&gt; []), [[^a-zA-Z0-9_]], [_]), [A-Z], [a-z])[_t],
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                             [$ofc_c_type],
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                             [C type corresponding to Fortran 77 $1])
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      fi
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      # Save some in shell variables for later use (e.g., need
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -    # OMPI_SIZEOF_FORTRAN_INTEGER in OMPI_F77_GET_FORTRAN_HANDLE_MAX)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -    [OMPI_FORTRAN_]m4_bpatsubst(m4_bpatsubst([$1], [*], []), [[^a-
</span><br>
<span class="quotelev3">&gt;&gt;&gt; zA-Z0-9_]], [_])[_C_TYPE=$ofc_c_type]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -    [OMPI_HAVE_FORTRAN_]m4_bpatsubst(m4_bpatsubst([$1], [*], []),
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [[^a-zA-Z0-9_]], [_])[=$ofc_have_type]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -    [OMPI_SIZEOF_FORTRAN_]m4_bpatsubst(m4_bpatsubst([$1], [*], []),
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [[^a-zA-Z0-9_]], [_])[=$ofc_type_size]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -    [OMPI_ALIGNMENT_FORTRAN_]m4_bpatsubst(m4_bpatsubst([$1], [*],
</span><br>
<span class="quotelev3">&gt;&gt;&gt; []), [[^a-zA-Z0-9_]], [_])[=$ofc_type_alignment]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +    # OPAL_SIZEOF_FORTRAN_INTEGER in OMPI_F77_GET_FORTRAN_HANDLE_MAX)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +    [OPAL_FORTRAN_]m4_bpatsubst(m4_bpatsubst([$1], [*], []), [[^a-
</span><br>
<span class="quotelev3">&gt;&gt;&gt; zA-Z0-9_]], [_])[_C_TYPE=$ofc_c_type]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +    [OPAL_HAVE_FORTRAN_]m4_bpatsubst(m4_bpatsubst([$1], [*], []),
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [[^a-zA-Z0-9_]], [_])[=$ofc_have_type]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +    [OPAL_SIZEOF_FORTRAN_]m4_bpatsubst(m4_bpatsubst([$1], [*], []),
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [[^a-zA-Z0-9_]], [_])[=$ofc_type_size]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +    [OPAL_ALIGNMENT_FORTRAN_]m4_bpatsubst(m4_bpatsubst([$1], [*],
</span><br>
<span class="quotelev3">&gt;&gt;&gt; []), [[^a-zA-Z0-9_]], [_])[=$ofc_type_alignment]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      # Clean up
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      OMPI_VAR_SCOPE_POP
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Modified: trunk/config/f77_check_logical_array.m4
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ======================================================================
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --- trunk/config/f77_check_logical_array.m4     (original)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +++ trunk/config/f77_check_logical_array.m4     2009-05-30 11:54:29
</span><br>
<span class="quotelev3">&gt;&gt;&gt; EDT (Sat, 30 May 2009)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -36,7 +36,7 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;               # C module
</span><br>
<span class="quotelev3">&gt;&gt;&gt;               # We really need the confdefs.h Header file for
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -             # the ompi_fortran_logical_t definition
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +             # the opal_fortran_logical_t definition
</span><br>
<span class="quotelev3">&gt;&gt;&gt;               if test \! -f confdefs.h ; then
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                   AC_MSG_WARN([*** Problem running configure test!])
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                   AC_MSG_WARN([*** Cannot find confdefs.h file for
</span><br>
<span class="quotelev3">&gt;&gt;&gt; config test])
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -52,9 +52,9 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #ifdef __cplusplus
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    extern &quot;C&quot; {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -void $ompi_check_logical_fn(ompi_fortran_logical_t * logical);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +void $ompi_check_logical_fn(opal_fortran_logical_t * logical);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -void $ompi_check_logical_fn(ompi_fortran_logical_t * logical)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +void $ompi_check_logical_fn(opal_fortran_logical_t * logical)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      int result = 0;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      FILE *f=fopen(&quot;conftestval&quot;, &quot;w&quot;);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Modified: trunk/config/f77_check_real16_c_equiv.m4
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ======================================================================
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --- trunk/config/f77_check_real16_c_equiv.m4    (original)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +++ trunk/config/f77_check_real16_c_equiv.m4    2009-05-30 11:54:29
</span><br>
<span class="quotelev3">&gt;&gt;&gt; EDT (Sat, 30 May 2009)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -29,13 +29,13 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      # We have to do this as a cache check for cross-compilation
</span><br>
<span class="quotelev3">&gt;&gt;&gt; platforms
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      AC_CACHE_CHECK([for C type matching bit representation of
</span><br>
<span class="quotelev3">&gt;&gt;&gt; REAL*16],
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          [real16_matches_c_var],
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -        [AS_IF([test &quot;$OMPI_WANT_F77_BINDINGS&quot; = &quot;1&quot; -a
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;$OMPI_HAVE_FORTRAN_REAL16&quot; = &quot;1&quot;],[
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +        [AS_IF([test &quot;$OMPI_WANT_F77_BINDINGS&quot; = &quot;1&quot; -a
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;$OPAL_HAVE_FORTRAN_REAL16&quot; = &quot;1&quot;],[
</span><br>
<span class="quotelev3">&gt;&gt;&gt;              # AC_CACHE_CHECK automatically does its own
</span><br>
<span class="quotelev3">&gt;&gt;&gt; AC_MSG_CHECKING, so close it out
</span><br>
<span class="quotelev3">&gt;&gt;&gt;              AC_MSG_RESULT([pending])
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;              # First check the type that we found was the same
</span><br>
<span class="quotelev3">&gt;&gt;&gt; length in C
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -            AC_MSG_CHECKING([if $OMPI_FORTRAN_REAL16_C_TYPE ==
</span><br>
<span class="quotelev3">&gt;&gt;&gt; REAL*16])
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OMPI_F77_CHECK_REAL16_EQUIV_TYPE([$OMPI_FORTRAN_REAL16_C_TYPE], [L])
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +            AC_MSG_CHECKING([if $OPAL_FORTRAN_REAL16_C_TYPE ==
</span><br>
<span class="quotelev3">&gt;&gt;&gt; REAL*16])
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OMPI_F77_CHECK_REAL16_EQUIV_TYPE([$OPAL_FORTRAN_REAL16_C_TYPE], [L])
</span><br>
<span class="quotelev3">&gt;&gt;&gt;              # If that didn't work, see if we have a compiler-specific
</span><br>
<span class="quotelev3">&gt;&gt;&gt;              # time that might work
</span><br>
<span class="quotelev3">&gt;&gt;&gt;              AS_IF([test &quot;$happy&quot; = &quot;no&quot;],
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -48,7 +48,7 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                            OMPI_UNIQ([CFLAGS])
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                            OMPI_F77_CHECK_REAL16_EQUIV_TYPE([_Quad],
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [q])
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                            AS_IF([test &quot;$happy&quot; = &quot;yes&quot;],
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -                                [OMPI_FORTRAN_REAL16_C_TYPE=&quot;_Quad&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +                                [OPAL_FORTRAN_REAL16_C_TYPE=&quot;_Quad&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                   AC_MSG_RESULT([works!])],
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                  [CFLAGS=&quot;$CFLAGS_save&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                   AC_MSG_RESULT([does not work])])
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -67,14 +67,14 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          ])
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      ])
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -    ompi_real16_matches_c=AS_VAR_GET([real16_matches_c_var])
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +    opal_real16_matches_c=AS_VAR_GET([real16_matches_c_var])
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      AS_VAR_POPDEF([real16_matches_c_var])
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -    AS_IF([test &quot;$ompi_real16_matches_c&quot; = &quot;yes&quot;],
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +    AS_IF([test &quot;$opal_real16_matches_c&quot; = &quot;yes&quot;],
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            [define_value=1],
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            [define_value=0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             AC_MSG_WARN([MPI_REAL16 and MPI_COMPLEX32 support have
</span><br>
<span class="quotelev3">&gt;&gt;&gt; been disabled])])
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -    AC_DEFINE_UNQUOTED([OMPI_REAL16_MATCHES_C], [$define_value],
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +    AC_DEFINE_UNQUOTED([OPAL_REAL16_MATCHES_C], [$define_value],
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                         [Whether Fortran REAL*16 matches the bit
</span><br>
<span class="quotelev3">&gt;&gt;&gt; format of the equivalent C type])
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      OMPI_VAR_SCOPE_POP
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  ])
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Modified: trunk/config/f77_get_fortran_handle_max.m4
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ======================================================================
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --- trunk/config/f77_get_fortran_handle_max.m4  (original)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +++ trunk/config/f77_get_fortran_handle_max.m4  2009-05-30 11:54:29
</span><br>
<span class="quotelev3">&gt;&gt;&gt; EDT (Sat, 30 May 2009)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -33,7 +33,7 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt;               # Calculate the number of f's that we need to append
</span><br>
<span class="quotelev3">&gt;&gt;&gt; to the hex
</span><br>
<span class="quotelev3">&gt;&gt;&gt;               # value.  Do one less than we really need becaue we
</span><br>
<span class="quotelev3">&gt;&gt;&gt; assume the
</span><br>
<span class="quotelev3">&gt;&gt;&gt;               # top nybble is 0x7 to avoid sign issues.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -             ompi_numf=`expr $OMPI_SIZEOF_FORTRAN_INTEGER \* 2 - 1`
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +             ompi_numf=`expr $OPAL_SIZEOF_FORTRAN_INTEGER \* 2 - 1`
</span><br>
<span class="quotelev3">&gt;&gt;&gt;               ompi_fint_max=0x7
</span><br>
<span class="quotelev3">&gt;&gt;&gt;               while test &quot;$ompi_numf&quot; -gt &quot;0&quot;; do
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                   ompi_fint_max=${ompi_fint_max}f
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -76,7 +76,7 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            fi
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            rm -f conftest.out &gt; /dev/null 2&gt;&amp;1 ])
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -    AC_DEFINE_UNQUOTED([OMPI_FORTRAN_HANDLE_MAX],
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +    AC_DEFINE_UNQUOTED([OPAL_FORTRAN_HANDLE_MAX],
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          [$ompi_cv_f77_fortran_handle_max],
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          [Max handle value for fortran MPI handles, effectively
</span><br>
<span class="quotelev3">&gt;&gt;&gt; min(INT_MAX, max fortran INTEGER value)])
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  ])dnl
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Modified: trunk/config/f77_get_value_true.m4
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ======================================================================
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --- trunk/config/f77_get_value_true.m4  (original)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +++ trunk/config/f77_get_value_true.m4  2009-05-30 11:54:29 EDT
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (Sat, 30 May 2009)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -35,7 +35,7 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt;               #
</span><br>
<span class="quotelev3">&gt;&gt;&gt;               # C module
</span><br>
<span class="quotelev3">&gt;&gt;&gt;               # We really need the confdefs.h Header file for
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -             # the ompi_fortran_logical_t definition
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +             # the opal_fortran_logical_t definition
</span><br>
<span class="quotelev3">&gt;&gt;&gt;               #
</span><br>
<span class="quotelev3">&gt;&gt;&gt;               if test \! -f confdefs.h ; then
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                   AC_MSG_WARN([*** Problem running configure test!])
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -53,19 +53,19 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  extern &quot;C&quot; {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -void $ompi_print_logical_fn(ompi_fortran_logical_t * logical);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +void $ompi_print_logical_fn(opal_fortran_logical_t * logical);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -void $ompi_print_logical_fn(ompi_fortran_logical_t * logical)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +void $ompi_print_logical_fn(opal_fortran_logical_t * logical)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      FILE *f=fopen(&quot;conftestval&quot;, &quot;w&quot;);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      if (!f) exit(1);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -    if( SIZEOF_INT &gt;= sizeof(ompi_fortran_logical_t) ) {
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +    if( SIZEOF_INT &gt;= sizeof(opal_fortran_logical_t) ) {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          fprintf(f, &quot;%d\n&quot;, (int)*logical);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -    } else if (SIZEOF_LONG &gt;= sizeof(ompi_fortran_logical_t) ) {
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +    } else if (SIZEOF_LONG &gt;= sizeof(opal_fortran_logical_t) ) {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         fprintf(f, &quot;%ld\n&quot;, (long) *logical);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #ifdef HAVE_LONG_LONG
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -    } else if (SIZEOF_LONG_LONG &gt;= sizeof(ompi_fortran_logical_t) ) {
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +    } else if (SIZEOF_LONG_LONG &gt;= sizeof(opal_fortran_logical_t) ) {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          fprintf(f, &quot;%lld\n&quot;, (long long) *logical);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      } else {
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -105,7 +105,7 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                       [AC_MSG_ERROR([Could not determine value of
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Fotran .TRUE..  Aborting.])])])
</span><br>
<span class="quotelev3">&gt;&gt;&gt;           fi])
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -    AC_DEFINE_UNQUOTED([OMPI_FORTRAN_VALUE_TRUE],
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +    AC_DEFINE_UNQUOTED([OPAL_FORTRAN_VALUE_TRUE],
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          [$ompi_cv_f77_true_value],
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          [Fortran value for LOGICAL .TRUE. value])
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Modified: trunk/config/f77_purge_unsupported_kind.m4
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ======================================================================
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --- trunk/config/f77_purge_unsupported_kind.m4  (original)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +++ trunk/config/f77_purge_unsupported_kind.m4  2009-05-30 11:54:29
</span><br>
<span class="quotelev3">&gt;&gt;&gt; EDT (Sat, 30 May 2009)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -24,10 +24,10 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    val=`echo $1 | cut -f2 -d'*'`
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    type=`echo $1 | cut -f1 -d'*'`
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -  if test &quot;x$((OMPI_SIZEOF_FORTRAN_$type$val))&quot; != &quot;x$val&quot; ; then
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -    eval &quot;OMPI_SIZEOF_FORTRAN_$type$val=0&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -    # eval &quot;OMPI_ALIGNMENT_FORTRAN_$type$val=0&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -    eval &quot;OMPI_HAVE_FORTRAN_$type$val=0&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +  if test &quot;x$((OPAL_SIZEOF_FORTRAN_$type$val))&quot; != &quot;x$val&quot; ; then
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +    eval &quot;OPAL_SIZEOF_FORTRAN_$type$val=0&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +    # eval &quot;OPAL_ALIGNMENT_FORTRAN_$type$val=0&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +    eval &quot;OPAL_HAVE_FORTRAN_$type$val=0&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      AC_MSG_RESULT([no])
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    else
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      AC_MSG_RESULT([yes])
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Modified: trunk/config/f90_check.m4
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ======================================================================
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --- trunk/config/f90_check.m4   (original)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +++ trunk/config/f90_check.m4   2009-05-30 11:54:29 EDT (Sat, 30 May
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 2009)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -106,14 +106,14 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          else
</span><br>
<span class="quotelev3">&gt;&gt;&gt;              # If this type has an F77 counterpart, see if it's
</span><br>
<span class="quotelev3">&gt;&gt;&gt;              # supported.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -            [ofc_f77_have_type=
</span><br>
<span class="quotelev3">&gt;&gt;&gt; $OMPI_HAVE_FORTRAN_]m4_bpatsubst(m4_bpatsubst([$1], [*], []), [[^a-
</span><br>
<span class="quotelev3">&gt;&gt;&gt; zA-Z0-9_]], [_])
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +            [ofc_f77_have_type=
</span><br>
<span class="quotelev3">&gt;&gt;&gt; $OPAL_HAVE_FORTRAN_]m4_bpatsubst(m4_bpatsubst([$1], [*], []), [[^a-
</span><br>
<span class="quotelev3">&gt;&gt;&gt; zA-Z0-9_]], [_])
</span><br>
<span class="quotelev3">&gt;&gt;&gt;              if test &quot;$ofc_f77_have_type&quot; = &quot;0&quot;; then
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  AC_MSG_WARN([*** Corresponding Fortran 77 type ($1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; not supported])
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  AC_MSG_WARN([*** Skipping Fortran 90 type ($1)])
</span><br>
<span class="quotelev3">&gt;&gt;&gt;              else
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  # Check the size of this type against its F77
</span><br>
<span class="quotelev3">&gt;&gt;&gt; counterpart
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -                [ofc_f77_sizeof=
</span><br>
<span class="quotelev3">&gt;&gt;&gt; $OMPI_SIZEOF_FORTRAN_]m4_bpatsubst(m4_bpatsubst([$1], [*], []), [[^a-
</span><br>
<span class="quotelev3">&gt;&gt;&gt; zA-Z0-9_]], [_])
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +                [ofc_f77_sizeof=
</span><br>
<span class="quotelev3">&gt;&gt;&gt; $OPAL_SIZEOF_FORTRAN_]m4_bpatsubst(m4_bpatsubst([$1], [*], []), [[^a-
</span><br>
<span class="quotelev3">&gt;&gt;&gt; zA-Z0-9_]], [_])
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  if test &quot;$ofc_f77_sizeof&quot; != &quot;&quot;; then
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                      AC_MSG_CHECKING([if Fortran 77 and 90 type
</span><br>
<span class="quotelev3">&gt;&gt;&gt; sizes match])
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                      if test &quot;$ofc_f77_sizeof&quot; != &quot;$ofc_type_size&quot;;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; then
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -158,15 +158,15 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      # AC_DEFINE_UNQUOTED), autoheader won't put them in the
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      # AC_CONFIG_HEADER (or AM_CONFIG_HEADER, in our case).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -
</span><br>
<span class="quotelev3">&gt;&gt;&gt; AC_DEFINE_UNQUOTED
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ([OMPI_HAVE_F90_]m4_translit(m4_bpatsubst(m4_bpatsubst([$1], [*],
</span><br>
<span class="quotelev3">&gt;&gt;&gt; []), [[^a-zA-Z0-9_]], [_]), [a-z], [A-Z]),
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +
</span><br>
<span class="quotelev3">&gt;&gt;&gt; AC_DEFINE_UNQUOTED
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ([OPAL_HAVE_F90_]m4_translit(m4_bpatsubst(m4_bpatsubst([$1], [*],
</span><br>
<span class="quotelev3">&gt;&gt;&gt; []), [[^a-zA-Z0-9_]], [_]), [a-z], [A-Z]),
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                         [$ofc_have_type],
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                         [Whether we have Fortran 90
</span><br>
<span class="quotelev3">&gt;&gt;&gt; $ofc_fortran_type or not])
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      # Save some in shell variables for later use.  Have to use m4
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      # functions here (vs. $ompi_upper_var_name, defined above)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; because
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      # these need to be set at autoconf time, not configure time.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -    [OMPI_SIZEOF_F90_]m4_translit(m4_bpatsubst(m4_bpatsubst([$1],
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [*], []), [[^a-zA-Z0-9_]], [_]), [a-z], [A-Z])[=$ofc_type_size]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -
</span><br>
<span class="quotelev3">&gt;&gt;&gt; AC_SUBST
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ([OMPI_SIZEOF_F90_]m4_translit(m4_bpatsubst(m4_bpatsubst([$1], [*],
</span><br>
<span class="quotelev3">&gt;&gt;&gt; []), [[^a-zA-Z0-9_]], [_]), [a-z], [A-Z]))
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +    [OPAL_SIZEOF_F90_]m4_translit(m4_bpatsubst(m4_bpatsubst([$1],
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [*], []), [[^a-zA-Z0-9_]], [_]), [a-z], [A-Z])[=$ofc_type_size]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +
</span><br>
<span class="quotelev3">&gt;&gt;&gt; AC_SUBST
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ([OPAL_SIZEOF_F90_]m4_translit(m4_bpatsubst(m4_bpatsubst([$1], [*],
</span><br>
<span class="quotelev3">&gt;&gt;&gt; []), [[^a-zA-Z0-9_]], [_]), [a-z], [A-Z]))
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      # Clean up
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      unset ofc_fortran_type ofc_expected_size ofc_want_range
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ofc_pretty_name
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Modified: trunk/configure.ac
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ======================================================================
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --- trunk/configure.ac  (original)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +++ trunk/configure.ac  2009-05-30 11:54:29 EDT (Sat, 30 May 2009)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -271,18 +271,18 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  OMPI_C_GET_ALIGNMENT(char, OPAL_ALIGNMENT_CHAR)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  OMPI_C_GET_ALIGNMENT(short, OPAL_ALIGNMENT_SHORT)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -OMPI_C_GET_ALIGNMENT(wchar_t, OMPI_ALIGNMENT_WCHAR)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +OMPI_C_GET_ALIGNMENT(wchar_t, OPAL_ALIGNMENT_WCHAR)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  OMPI_C_GET_ALIGNMENT(int, OPAL_ALIGNMENT_INT)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  OMPI_C_GET_ALIGNMENT(long, OPAL_ALIGNMENT_LONG)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  if test $ac_cv_type_long_long = yes; then
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      OMPI_C_GET_ALIGNMENT(long long, OPAL_ALIGNMENT_LONG_LONG)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  fi
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -OMPI_C_GET_ALIGNMENT(float, OMPI_ALIGNMENT_FLOAT)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -OMPI_C_GET_ALIGNMENT(double, OMPI_ALIGNMENT_DOUBLE)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +OMPI_C_GET_ALIGNMENT(float, OPAL_ALIGNMENT_FLOAT)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +OMPI_C_GET_ALIGNMENT(double, OPAL_ALIGNMENT_DOUBLE)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  if test $ac_cv_type_long_double = yes; then
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      OMPI_C_GET_ALIGNMENT(long double, OPAL_ALIGNMENT_LONG_DOUBLE)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  fi
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -OMPI_C_GET_ALIGNMENT(void *, OMPI_ALIGNMENT_VOID_P)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +OMPI_C_GET_ALIGNMENT(void *, OPAL_ALIGNMENT_VOID_P)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  # Does the C compiler native support &quot;bool&quot;? (i.e., without
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -403,7 +403,7 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  # check for type alignments
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -OMPI_C_GET_ALIGNMENT(bool, OMPI_ALIGNMENT_CXX_BOOL)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +OMPI_C_GET_ALIGNMENT(bool, OPAL_ALIGNMENT_CXX_BOOL)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  AC_LANG_POP(C++)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  # check if we want C++ support
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -445,7 +445,7 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  # This allows us to mark bogus types, but still have them be a valid
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  # [sentinel] value
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -AC_DEFINE([ompi_fortran_bogus_type_t], [int],
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +AC_DEFINE([opal_fortran_bogus_type_t], [int],
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            [A bogus type that allows us to have sentinel type values
</span><br>
<span class="quotelev3">&gt;&gt;&gt; that are still valid])
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  # We want to set the #define's for all of these, so invoke the macros
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -600,13 +600,13 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  # whatever is the same size as a F77 INTEGER -- for the
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  # most-likely-will-never-occur case where F77 INTEGER is smaller than
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  # an F90 INTEGER; see MPI-2 4.12.6.5
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -if test &quot;$OMPI_SIZEOF_FORTRAN_INTEGER&quot; = &quot;2&quot;; then
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +if test &quot;$OPAL_SIZEOF_FORTRAN_INTEGER&quot; = &quot;2&quot;; then
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      OMPI_F90_GET_INT_KIND(MPI_INTEGER_KIND, 4, OMPI_MPI_INTEGER_KIND)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -elif test &quot;$OMPI_SIZEOF_FORTRAN_INTEGER&quot; = &quot;4&quot;; then
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +elif test &quot;$OPAL_SIZEOF_FORTRAN_INTEGER&quot; = &quot;4&quot;; then
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      OMPI_F90_GET_INT_KIND(MPI_INTEGER_KIND, 9, OMPI_MPI_INTEGER_KIND)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -elif test &quot;$OMPI_SIZEOF_FORTRAN_INTEGER&quot; = &quot;8&quot;; then
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +elif test &quot;$OPAL_SIZEOF_FORTRAN_INTEGER&quot; = &quot;8&quot;; then
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      OMPI_F90_GET_INT_KIND(MPI_INTEGER_KIND, 18,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OMPI_MPI_INTEGER_KIND)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -elif test &quot;$OMPI_SIZEOF_FORTRAN_INTEGER&quot; = &quot;16&quot;; then
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +elif test &quot;$OPAL_SIZEOF_FORTRAN_INTEGER&quot; = &quot;16&quot;; then
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      OMPI_F90_GET_INT_KIND(MPI_INTEGER_KIND, 19,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OMPI_MPI_INTEGER_KIND)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      AC_MSG_ERROR([Cannot support Fortran MPI_INTEGER_KIND!])
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  fi
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Modified: trunk/contrib/platform/win32/CMakeModules/f77_check.cmake
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ======================================================================
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --- trunk/contrib/platform/win32/CMakeModules/f77_check.cmake
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (original)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +++ trunk/contrib/platform/win32/CMakeModules/f77_check.cmake
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 2009-05-30 11:54:29 EDT (Sat, 30 May 2009)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -28,13 +28,13 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    SET(NEED_RECHECK TRUE)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    # do we need to check all the features?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -  IF(DEFINED OMPI_HAVE_FORTRAN_${TYPE_NAME})
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +  IF(DEFINED OPAL_HAVE_FORTRAN_${TYPE_NAME})
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      IF(${F77_SETUP_${TYPE_NAME}} STREQUAL ${OMPI_WANT_F77_BINDINGS})
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        SET(NEED_RECHECK FALSE)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      ELSE(${F77_SETUP_${TYPE_NAME}} STREQUAL $
</span><br>
<span class="quotelev3">&gt;&gt;&gt; {OMPI_WANT_F77_BINDINGS})
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        SET(NEED_RECHECK TRUE)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      ENDIF(${F77_SETUP_${TYPE_NAME}} STREQUAL $
</span><br>
<span class="quotelev3">&gt;&gt;&gt; {OMPI_WANT_F77_BINDINGS})
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -  ENDIF(DEFINED OMPI_HAVE_FORTRAN_${TYPE_NAME})
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +  ENDIF(DEFINED OPAL_HAVE_FORTRAN_${TYPE_NAME})
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    # use this variable to check whether user changed F77 option.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    # every time OMPI_WANT_F77_BINDINGS got changed, we need to re-
</span><br>
<span class="quotelev3">&gt;&gt;&gt; check everything.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -51,7 +51,7 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      SET(ofc_have_type 0)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      SET(ofc_type_size ${SIZEOF_INT})
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      SET(ofc_type_alignment ${SIZEOF_INT})
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -    SET(ofc_c_type ${ompi_fortran_bogus_type_t})
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +    SET(ofc_c_type ${opal_fortran_bogus_type_t})
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      # Only check if we actually want the F77 bindings / have a F77
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      # compiler.  This allows us to call this macro, even if there is
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -105,19 +105,19 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      # We always need these defines -- even if we don't have a given
</span><br>
<span class="quotelev3">&gt;&gt;&gt; type,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      # there are some places in the code where we have to have
</span><br>
<span class="quotelev3">&gt;&gt;&gt; *something*.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -    SET(OMPI_HAVE_FORTRAN_${TYPE_NAME} ${ofc_have_type} CACHE
</span><br>
<span class="quotelev3">&gt;&gt;&gt; INTERNAL &quot;OMPI_HAVE_FORTRAN_${TYPE_NAME}&quot;)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -    SET(OMPI_SIZEOF_FORTRAN_${TYPE_NAME} ${ofc_type_size} CACHE
</span><br>
<span class="quotelev3">&gt;&gt;&gt; INTERNAL &quot;OMPI_SIZEOF_FORTRAN_${TYPE_NAME}&quot;)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -    SET(OMPI_ALIGNMENT_FORTRAN_${TYPE_NAME} ${ofc_type_alignment}
</span><br>
<span class="quotelev3">&gt;&gt;&gt; CACHE INTERNAL &quot;OMPI_ALIGNMENT_FORTRAN_${TYPE_NAME}&quot;)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +    SET(OPAL_HAVE_FORTRAN_${TYPE_NAME} ${ofc_have_type} CACHE
</span><br>
<span class="quotelev3">&gt;&gt;&gt; INTERNAL &quot;OPAL_HAVE_FORTRAN_${TYPE_NAME}&quot;)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +    SET(OPAL_SIZEOF_FORTRAN_${TYPE_NAME} ${ofc_type_size} CACHE
</span><br>
<span class="quotelev3">&gt;&gt;&gt; INTERNAL &quot;OPAL_SIZEOF_FORTRAN_${TYPE_NAME}&quot;)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +    SET(OPAL_ALIGNMENT_FORTRAN_${TYPE_NAME} ${ofc_type_alignment}
</span><br>
<span class="quotelev3">&gt;&gt;&gt; CACHE INTERNAL &quot;OPAL_ALIGNMENT_FORTRAN_${TYPE_NAME}&quot;)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      IF(NOT &quot;${TYPE_LIST}&quot; STREQUAL &quot;&quot;)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        STRING(TOLOWER ${TYPE_NAME} TYPE_NAME_L)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -      SET(ompi_fortran_${TYPE_NAME_L}_t ${ofc_c_type} CACHE
</span><br>
<span class="quotelev3">&gt;&gt;&gt; INTERNAL &quot;ompi_fortran_${TYPE_NAME_L}_t&quot;)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +      SET(opal_fortran_${TYPE_NAME_L}_t ${ofc_c_type} CACHE
</span><br>
<span class="quotelev3">&gt;&gt;&gt; INTERNAL &quot;opal_fortran_${TYPE_NAME_L}_t&quot;)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      ENDIF(NOT &quot;${TYPE_LIST}&quot; STREQUAL &quot;&quot;)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -    #MESSAGE(&quot;OMPI_HAVE_FORTRAN_${TYPE_NAME}:${OMPI_HAVE_FORTRAN_$
</span><br>
<span class="quotelev3">&gt;&gt;&gt; {TYPE_NAME}}&quot;)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -    #MESSAGE(&quot;OMPI_SIZEOF_FORTRAN_${TYPE_NAME}:$
</span><br>
<span class="quotelev3">&gt;&gt;&gt; {OMPI_SIZEOF_FORTRAN_${TYPE_NAME}}&quot;)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -    #MESSAGE(&quot;OMPI_ALIGNMENT_FORTRAN_${TYPE_NAME}:$
</span><br>
<span class="quotelev3">&gt;&gt;&gt; {OMPI_ALIGNMENT_FORTRAN_${TYPE_NAME}}&quot;)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -    #MESSAGE(&quot;ompi_fortran_${TYPE_NAME_L}_t:${ompi_fortran_$
</span><br>
<span class="quotelev3">&gt;&gt;&gt; {TYPE_NAME_L}_t}&quot;)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +    #MESSAGE(&quot;OPAL_HAVE_FORTRAN_${TYPE_NAME}:${OPAL_HAVE_FORTRAN_$
</span><br>
<span class="quotelev3">&gt;&gt;&gt; {TYPE_NAME}}&quot;)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +    #MESSAGE(&quot;OPAL_SIZEOF_FORTRAN_${TYPE_NAME}:$
</span><br>
<span class="quotelev3">&gt;&gt;&gt; {OPAL_SIZEOF_FORTRAN_${TYPE_NAME}}&quot;)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +    #MESSAGE(&quot;OPAL_ALIGNMENT_FORTRAN_${TYPE_NAME}:$
</span><br>
<span class="quotelev3">&gt;&gt;&gt; {OPAL_ALIGNMENT_FORTRAN_${TYPE_NAME}}&quot;)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +    #MESSAGE(&quot;opal_fortran_${TYPE_NAME_L}_t:${opal_fortran_$
</span><br>
<span class="quotelev3">&gt;&gt;&gt; {TYPE_NAME_L}_t}&quot;)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    ENDIF(NEED_RECHECK)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -ENDMACRO(OMPI_F77_CHECK FORTRAN_TYPE C_TYPE TYPE_LIST EXPECTED_SIZE)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; \ No newline at end of file
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +ENDMACRO(OMPI_F77_CHECK FORTRAN_TYPE C_TYPE TYPE_LIST EXPECTED_SIZE)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Modified: trunk/contrib/platform/win32/CMakeModules/
</span><br>
<span class="quotelev3">&gt;&gt;&gt; f77_check_real16_c_equiv.cmake
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ======================================================================
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --- trunk/contrib/platform/win32/CMakeModules/
</span><br>
<span class="quotelev3">&gt;&gt;&gt; f77_check_real16_c_equiv.cmake    (original)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +++ trunk/contrib/platform/win32/CMakeModules/
</span><br>
<span class="quotelev3">&gt;&gt;&gt; f77_check_real16_c_equiv.cmake    2009-05-30 11:54:29 EDT (Sat, 30
</span><br>
<span class="quotelev3">&gt;&gt;&gt; May 2009)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -12,11 +12,11 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  # OMPI_F77_CHECK_REAL16_C_EQUIV
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  # ----------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  MACRO(OMPI_F77_CHECK_REAL16_C_EQUIV)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -  SET(OMPI_REAL16_MATCHES_C 0)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -  #MESSAGE(STATUS &quot;OMPI_HAVE_FORTRAN_REAL16:$
</span><br>
<span class="quotelev3">&gt;&gt;&gt; {OMPI_HAVE_FORTRAN_REAL16}&quot;)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +  SET(OPAL_REAL16_MATCHES_C 0)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +  #MESSAGE(STATUS &quot;OPAL_HAVE_FORTRAN_REAL16:$
</span><br>
<span class="quotelev3">&gt;&gt;&gt; {OPAL_HAVE_FORTRAN_REAL16}&quot;)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    IF(OMPI_WANT_F77_BINDINGS)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -    IF(OMPI_HAVE_FORTRAN_REAL16)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +    IF(OPAL_HAVE_FORTRAN_REAL16)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        OMPI_F77_MAKE_C_FUNCTION(c ompi_ac_c_fn)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        FILE(WRITE ${CMAKE_BINARY_DIR}${CMAKE_FILES_DIRECTORY}/
</span><br>
<span class="quotelev3">&gt;&gt;&gt; CMakeTmp/conftest_c.c
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          &quot;#include &lt;stdio.h&gt;&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -67,15 +67,15 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            # read out type size value from the file, and write back
</span><br>
<span class="quotelev3">&gt;&gt;&gt; to the output variable
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            FILE(READ ${CMAKE_BINARY_DIR}${CMAKE_FILES_DIRECTORY}/
</span><br>
<span class="quotelev3">&gt;&gt;&gt; CMakeTmp/conftestval ${OUTPUT_VARIABLE})
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            MESSAGE(STATUS &quot;Check if REAL*16 bit-matches C...$
</span><br>
<span class="quotelev3">&gt;&gt;&gt; {OUTPUT_VARIABLE}&quot;)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -          SET(OMPI_REAL16_MATCHES_C 1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +          SET(OPAL_REAL16_MATCHES_C 1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          ELSE(EXISTS ${CMAKE_BINARY_DIR}${CMAKE_FILES_DIRECTORY}/
</span><br>
<span class="quotelev3">&gt;&gt;&gt; CMakeTmp/conftestval)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            MESSAGE(STATUS &quot;Check if REAL*16 bit-matches C...failed&quot;)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          ENDIF(EXISTS ${CMAKE_BINARY_DIR}${CMAKE_FILES_DIRECTORY}/
</span><br>
<span class="quotelev3">&gt;&gt;&gt; CMakeTmp/conftestval)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        ENDIF(RESULT)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -    ELSE(OMPI_HAVE_FORTRAN_REAL16)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +    ELSE(OPAL_HAVE_FORTRAN_REAL16)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        MESSAGE(STATUS &quot;Check if REAL*16 bit-matches C...skipped&quot;)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -    ENDIF(OMPI_HAVE_FORTRAN_REAL16)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +    ENDIF(OPAL_HAVE_FORTRAN_REAL16)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    ENDIF(OMPI_WANT_F77_BINDINGS)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  ENDMACRO(OMPI_F77_CHECK_REAL16_C_EQUIV)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; \ No newline at end of file
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Modified: trunk/contrib/platform/win32/CMakeModules/
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ompi_configure.cmake
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ======================================================================
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --- trunk/contrib/platform/win32/CMakeModules/
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ompi_configure.cmake      (original)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +++ trunk/contrib/platform/win32/CMakeModules/
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ompi_configure.cmake      2009-05-30 11:54:29 EDT (Sat, 30 May 2009)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -1115,7 +1115,7 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  # This allows us to mark bogus types, but still have them be a valid
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  # [sentinel] value
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -SET(ompi_fortran_bogus_type_t &quot;int&quot;)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +SET(opal_fortran_bogus_type_t &quot;int&quot;)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  # We want to set the #define's for all of these, so invoke the macros
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  # regardless of whether we have F77 support or not.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -1205,17 +1205,17 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #/* Max handle value for fortran MPI handles, effectively
</span><br>
<span class="quotelev3">&gt;&gt;&gt; min(INT_MAX, max
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #   fortran INTEGER value) */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#/* #undef OMPI_FORTRAN_HANDLE_MAX */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#/* #undef OPAL_FORTRAN_HANDLE_MAX */
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  # Need to be fixed.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  IF(WIN32)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -  SET (OMPI_FORTRAN_HANDLE_MAX &quot;2147483647&quot;)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +  SET (OPAL_FORTRAN_HANDLE_MAX &quot;2147483647&quot;)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  ENDIF(WIN32)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #/* Fortran value for LOGICAL .TRUE. value */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#/* #undef OMPI_FORTRAN_VALUE_TRUE */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#/* #undef OPAL_FORTRAN_VALUE_TRUE */
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  # Need to be fixed.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  IF(WIN32)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -  SET (OMPI_FORTRAN_VALUE_TRUE 0)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +  SET (OPAL_FORTRAN_VALUE_TRUE 0)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  ENDIF(WIN32)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -1227,58 +1227,58 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #/* #undef OMPI_F90 */
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #/* Whether we have Fortran 90 $ofc_fortran_type or not */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#/* #undef OMPI_HAVE_F90_COMPLEX */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#/* #undef OPAL_HAVE_F90_COMPLEX */
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #/* Whether we have Fortran 90 $ofc_fortran_type or not */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#/* #undef OMPI_HAVE_F90_COMPLEX16 */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#/* #undef OPAL_HAVE_F90_COMPLEX16 */
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #/* Whether we have Fortran 90 $ofc_fortran_type or not */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#/* #undef OMPI_HAVE_F90_COMPLEX32 */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#/* #undef OPAL_HAVE_F90_COMPLEX32 */
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #/* Whether we have Fortran 90 $ofc_fortran_type or not */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#/* #undef OMPI_HAVE_F90_COMPLEX8 */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#/* #undef OPAL_HAVE_F90_COMPLEX8 */
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #/* Whether we have Fortran 90 $ofc_fortran_type or not */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#/* #undef OMPI_HAVE_F90_DOUBLE_COMPLEX */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#/* #undef OPAL_HAVE_F90_DOUBLE_COMPLEX */
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #/* Whether we have Fortran 90 $ofc_fortran_type or not */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#/* #undef OMPI_HAVE_F90_DOUBLE_PRECISION */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#/* #undef OPAL_HAVE_F90_DOUBLE_PRECISION */
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #/* Whether we have Fortran 90 $ofc_fortran_type or not */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#/* #undef OMPI_HAVE_F90_INTEGER */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#/* #undef OPAL_HAVE_F90_INTEGER */
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #/* Whether we have Fortran 90 $ofc_fortran_type or not */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#/* #undef OMPI_HAVE_F90_INTEGER1 */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#/* #undef OPAL_HAVE_F90_INTEGER1 */
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #/* Whether we have Fortran 90 $ofc_fortran_type or not */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#/* #undef OMPI_HAVE_F90_INTEGER16 */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#/* #undef OPAL_HAVE_F90_INTEGER16 */
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #/* Whether we have Fortran 90 $ofc_fortran_type or not */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#/* #undef OMPI_HAVE_F90_INTEGER2 */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#/* #undef OPAL_HAVE_F90_INTEGER2 */
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #/* Whether we have Fortran 90 $ofc_fortran_type or not */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#/* #undef OMPI_HAVE_F90_INTEGER4 */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#/* #undef OPAL_HAVE_F90_INTEGER4 */
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #/* Whether we have Fortran 90 $ofc_fortran_type or not */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#/* #undef OMPI_HAVE_F90_INTEGER8 */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#/* #undef OPAL_HAVE_F90_INTEGER8 */
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #/* Whether we have Fortran 90 $ofc_fortran_type or not */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#/* #undef OMPI_HAVE_F90_LOGICAL */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#/* #undef OPAL_HAVE_F90_LOGICAL */
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #/* Whether we have Fortran 90 $ofc_fortran_type or not */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#/* #undef OMPI_HAVE_F90_REAL */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#/* #undef OPAL_HAVE_F90_REAL */
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #/* Whether we have Fortran 90 $ofc_fortran_type or not */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#/* #undef OMPI_HAVE_F90_REAL16 */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#/* #undef OPAL_HAVE_F90_REAL16 */
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #/* Whether we have Fortran 90 $ofc_fortran_type or not */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#/* #undef OMPI_HAVE_F90_REAL2 */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#/* #undef OPAL_HAVE_F90_REAL2 */
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #/* Whether we have Fortran 90 $ofc_fortran_type or not */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#/* #undef OMPI_HAVE_F90_REAL4 */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#/* #undef OPAL_HAVE_F90_REAL4 */
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #/* Whether we have Fortran 90 $ofc_fortran_type or not */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#/* #undef OMPI_HAVE_F90_REAL8 */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#/* #undef OPAL_HAVE_F90_REAL8 */
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #########################################################################
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ################## @@ -1729,127 +1729,127 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #/* A bogus type that allows us to have sentinel type values that
</span><br>
<span class="quotelev3">&gt;&gt;&gt; are still
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #   valid */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#/* #undef ompi_fortran_bogus_type_t */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#/* #undef opal_fortran_bogus_type_t */
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #IF(WIN32)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#  SET(ompi_fortran_bogus_type_t 1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#  SET(ompi_fortran_bogus_type_t_STRING &quot;int&quot;)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#  SET(opal_fortran_bogus_type_t 1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#  SET(opal_fortran_bogus_type_t_STRING &quot;int&quot;)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #ENDIF(WIN32)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #/* C type corresponding to Fortran 77 COMPLEX*16 */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#/* #undef ompi_fortran_complex16_t */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#/* #undef opal_fortran_complex16_t */
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #IF(WIN32)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#  SET(ompi_fortran_complex16_t 1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#  SET(ompi_fortran_complex16_t_STRING &quot;ompi_fortran_bogus_type_t&quot;)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#  SET(opal_fortran_complex16_t 1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#  SET(opal_fortran_complex16_t_STRING &quot;opal_fortran_bogus_type_t&quot;)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #ENDIF(WIN32)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  ##
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  ##/* C type corresponding to Fortran 77 COMPLEX*32 */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -##/* #undef ompi_fortran_complex32_t */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +##/* #undef opal_fortran_complex32_t */
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #IF(WIN32)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#  SET(ompi_fortran_complex32_t 1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#  SET(ompi_fortran_complex32_t_STRING &quot;ompi_fortran_bogus_type_t&quot;)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#  SET(opal_fortran_complex32_t 1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#  SET(opal_fortran_complex32_t_STRING &quot;opal_fortran_bogus_type_t&quot;)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #ENDIF(WIN32)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  ##
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  ##/* C type corresponding to Fortran 77 COMPLEX*8 */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -##/* #undef ompi_fortran_complex8_t */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +##/* #undef opal_fortran_complex8_t */
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #IF(WIN32)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#  SET(ompi_fortran_complex8_t 1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#  SET(ompi_fortran_complex8_t_STRING &quot;ompi_fortran_bogus_type_t&quot;)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#  SET(opal_fortran_complex8_t 1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#  SET(opal_fortran_complex8_t_STRING &quot;opal_fortran_bogus_type_t&quot;)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #ENDIF(WIN32)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  ##
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  ##/* C type corresponding to Fortran 77 COMPLEX */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -##/* #undef ompi_fortran_complex_t */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +##/* #undef opal_fortran_complex_t */
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #IF(WIN32)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#  SET(ompi_fortran_complex_t 1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#  SET(ompi_fortran_complex_t_STRING &quot;ompi_fortran_bogus_type_t&quot;)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#  SET(opal_fortran_complex_t 1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#  SET(opal_fortran_complex_t_STRING &quot;opal_fortran_bogus_type_t&quot;)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #ENDIF(WIN32)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  ##
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  ##/* C type corresponding to Fortran 77 DOUBLE PRECISION */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -##/* #undef ompi_fortran_double_precision_t */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +##/* #undef opal_fortran_double_precision_t */
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #IF(WIN32)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#  SET(ompi_fortran_double_precision_t 1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#  SET(ompi_fortran_double_precision_t_STRING
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;ompi_fortran_bogus_type_t&quot;)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#  SET(opal_fortran_double_precision_t 1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#  SET(opal_fortran_double_precision_t_STRING
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;opal_fortran_bogus_type_t&quot;)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #ENDIF(WIN32)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  ##
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  ##/* C type corresponding to Fortran 77 INTEGER*16 */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -##/* #undef ompi_fortran_integer16_t */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +##/* #undef opal_fortran_integer16_t */
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #IF(WIN32)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#  SET(ompi_fortran_integer16_t 1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#  SET(ompi_fortran_integer16_t_STRING &quot;ompi_fortran_bogus_type_t&quot;)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#  SET(opal_fortran_integer16_t 1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#  SET(opal_fortran_integer16_t_STRING &quot;opal_fortran_bogus_type_t&quot;)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #ENDIF(WIN32)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  ##
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  ##/* C type corresponding to Fortran 77 INTEGER*1 */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -##/* #undef ompi_fortran_integer1_t */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +##/* #undef opal_fortran_integer1_t */
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #IF(WIN32)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#  SET(ompi_fortran_integer1_t 1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#  SET(ompi_fortran_integer1_t_STRING &quot;ompi_fortran_bogus_type_t&quot;)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#  SET(opal_fortran_integer1_t 1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#  SET(opal_fortran_integer1_t_STRING &quot;opal_fortran_bogus_type_t&quot;)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #ENDIF(WIN32)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  ##
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  ##/* C type corresponding to Fortran 77 INTEGER*2 */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -##/* #undef ompi_fortran_integer2_t */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +##/* #undef opal_fortran_integer2_t */
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #IF(WIN32)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#  SET(ompi_fortran_integer2_t 1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#  SET(ompi_fortran_integer2_t_STRING &quot;ompi_fortran_bogus_type_t&quot;)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#  SET(opal_fortran_integer2_t 1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#  SET(opal_fortran_integer2_t_STRING &quot;opal_fortran_bogus_type_t&quot;)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #ENDIF(WIN32)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  ##
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  ##/* C type corresponding to Fortran 77 INTEGER*4 */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -##/* #undef ompi_fortran_integer4_t */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +##/* #undef opal_fortran_integer4_t */
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #IF(WIN32)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#  SET(ompi_fortran_integer4_t 1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#  SET(ompi_fortran_integer4_t_STRING &quot;ompi_fortran_bogus_type_t&quot;)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#  SET(opal_fortran_integer4_t 1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#  SET(opal_fortran_integer4_t_STRING &quot;opal_fortran_bogus_type_t&quot;)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #ENDIF(WIN32)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  ##
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  ##/* C type corresponding to Fortran 77 INTEGER*8 */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -##/* #undef ompi_fortran_integer8_t */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +##/* #undef opal_fortran_integer8_t */
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #IF(WIN32)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#  SET(ompi_fortran_integer8_t 1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#  SET(ompi_fortran_integer8_t_STRING &quot;ompi_fortran_bogus_type_t&quot;)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#  SET(opal_fortran_integer8_t 1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#  SET(opal_fortran_integer8_t_STRING &quot;opal_fortran_bogus_type_t&quot;)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #ENDIF(WIN32)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  ##
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  ##/* C type corresponding to Fortran 77 INTEGER */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -##/* #undef ompi_fortran_integer_t */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +##/* #undef opal_fortran_integer_t */
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #IF(WIN32)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#  SET(ompi_fortran_integer_t 1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#  SET(ompi_fortran_integer_t_STRING &quot;ompi_fortran_bogus_type_t&quot;)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#  SET(opal_fortran_integer_t 1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#  SET(opal_fortran_integer_t_STRING &quot;opal_fortran_bogus_type_t&quot;)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #ENDIF(WIN32)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  ##
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  ##/* C type corresponding to Fortran 77 LOGICAL */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -##/* #undef ompi_fortran_logical_t */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +##/* #undef opal_fortran_logical_t */
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #IF(WIN32)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#  SET(ompi_fortran_logical_t 1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#  SET(ompi_fortran_logical_t_STRING &quot;ompi_fortran_bogus_type_t&quot;)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#  SET(opal_fortran_logical_t 1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#  SET(opal_fortran_logical_t_STRING &quot;opal_fortran_bogus_type_t&quot;)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #ENDIF(WIN32)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  ##
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  ##/* C type corresponding to Fortran 77 REAL*16 */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -##/* #undef ompi_fortran_real16_t */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +##/* #undef opal_fortran_real16_t */
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #IF(WIN32)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#  SET(ompi_fortran_real16_t 1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#  SET(ompi_fortran_real16_t_STRING &quot;ompi_fortran_bogus_type_t&quot;)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#  SET(opal_fortran_real16_t 1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#  SET(opal_fortran_real16_t_STRING &quot;opal_fortran_bogus_type_t&quot;)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #ENDIF(WIN32)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  ##
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  ##/* C type corresponding to Fortran 77 REAL*2 */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -##/* #undef ompi_fortran_real2_t */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +##/* #undef opal_fortran_real2_t */
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #IF(WIN32)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#  SET(ompi_fortran_real2_t 1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#  SET(ompi_fortran_real2_t_STRING &quot;ompi_fortran_bogus_type_t&quot;)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#  SET(opal_fortran_real2_t 1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#  SET(opal_fortran_real2_t_STRING &quot;opal_fortran_bogus_type_t&quot;)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #ENDIF(WIN32)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  ##
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  ##/* C type corresponding to Fortran 77 REAL*4 */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -##/* #undef ompi_fortran_real4_t */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +##/* #undef opal_fortran_real4_t */
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #IF(WIN32)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#  SET(ompi_fortran_real4_t 1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#  SET(ompi_fortran_real4_t_STRING &quot;ompi_fortran_bogus_type_t&quot;)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#  SET(opal_fortran_real4_t 1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#  SET(opal_fortran_real4_t_STRING &quot;opal_fortran_bogus_type_t&quot;)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #ENDIF(WIN32)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  ##
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  ##/* C type corresponding to Fortran 77 REAL*8 */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -##/* #undef ompi_fortran_real8_t */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +##/* #undef opal_fortran_real8_t */
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #IF(WIN32)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#  SET(ompi_fortran_real8_t 1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#  SET(ompi_fortran_real8_t_STRING &quot;ompi_fortran_bogus_type_t&quot;)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#  SET(opal_fortran_real8_t 1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#  SET(opal_fortran_real8_t_STRING &quot;opal_fortran_bogus_type_t&quot;)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #ENDIF(WIN32)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  ##
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  ##/* C type corresponding to Fortran 77 REAL */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -##/* #undef ompi_fortran_real_t */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +##/* #undef opal_fortran_real_t */
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #IF(WIN32)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#  SET(ompi_fortran_real_t 1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#  SET(ompi_fortran_real_t_STRING &quot;ompi_fortran_bogus_type_t&quot;)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#  SET(opal_fortran_real_t 1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#  SET(opal_fortran_real_t_STRING &quot;opal_fortran_bogus_type_t&quot;)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #ENDIF(WIN32)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Modified: trunk/contrib/platform/win32/ConfigFiles/mpi.h.cmake
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ======================================================================
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --- trunk/contrib/platform/win32/ConfigFiles/mpi.h.cmake
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (original)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +++ trunk/contrib/platform/win32/ConfigFiles/mpi.h.cmake
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 2009-05-30 11:54:29 EDT (Sat, 30 May 2009)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -65,43 +65,43 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #cmakedefine OPAL_SIZEOF_INT ${SIZEOF_INT}
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  /* Whether we have FORTRAN LOGICAL*1 or not */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#define OMPI_HAVE_FORTRAN_LOGICAL1 ${OMPI_HAVE_FORTRAN_LOGICAL1}
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#define OPAL_HAVE_FORTRAN_LOGICAL1 ${OPAL_HAVE_FORTRAN_LOGICAL1}
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  /* Whether we have FORTRAN LOGICAL*2 or not */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#define OMPI_HAVE_FORTRAN_LOGICAL2 ${OMPI_HAVE_FORTRAN_LOGICAL2}
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#define OPAL_HAVE_FORTRAN_LOGICAL2 ${OPAL_HAVE_FORTRAN_LOGICAL2}
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  /* Whether we have FORTRAN LOGICAL*4 or not */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#define OMPI_HAVE_FORTRAN_LOGICAL4 ${OMPI_HAVE_FORTRAN_LOGICAL4}
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#define OPAL_HAVE_FORTRAN_LOGICAL4 ${OPAL_HAVE_FORTRAN_LOGICAL4}
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  /* Whether we have FORTRAN LOGICAL*8 or not */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#define OMPI_HAVE_FORTRAN_LOGICAL8 ${OMPI_HAVE_FORTRAN_LOGICAL8}
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#define OPAL_HAVE_FORTRAN_LOGICAL8 ${OPAL_HAVE_FORTRAN_LOGICAL8}
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  /* Whether we have FORTRAN INTEGER*1 or not */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#define OMPI_HAVE_FORTRAN_INTEGER1 ${OMPI_HAVE_FORTRAN_INTEGER1}
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#define OPAL_HAVE_FORTRAN_INTEGER1 ${OPAL_HAVE_FORTRAN_INTEGER1}
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  /* Whether we have FORTRAN INTEGER*16 or not */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#define OMPI_HAVE_FORTRAN_INTEGER16 ${OMPI_HAVE_FORTRAN_INTEGER16}
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#define OPAL_HAVE_FORTRAN_INTEGER16 ${OPAL_HAVE_FORTRAN_INTEGER16}
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  /* Whether we have FORTRAN INTEGER*2 or not */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#define OMPI_HAVE_FORTRAN_INTEGER2 ${OMPI_HAVE_FORTRAN_INTEGER2}
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#define OPAL_HAVE_FORTRAN_INTEGER2 ${OPAL_HAVE_FORTRAN_INTEGER2}
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  /* Whether we have FORTRAN INTEGER*4 or not */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#define OMPI_HAVE_FORTRAN_INTEGER4 ${OMPI_HAVE_FORTRAN_INTEGER4}
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#define OPAL_HAVE_FORTRAN_INTEGER4 ${OPAL_HAVE_FORTRAN_INTEGER4}
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  /* Whether we have FORTRAN INTEGER*8 or not */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#define OMPI_HAVE_FORTRAN_INTEGER8 ${OMPI_HAVE_FORTRAN_INTEGER8}
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#define OPAL_HAVE_FORTRAN_INTEGER8 ${OPAL_HAVE_FORTRAN_INTEGER8}
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  /* Whether we have FORTRAN REAL*16 or not */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#define OMPI_HAVE_FORTRAN_REAL16 ${OMPI_HAVE_FORTRAN_REAL16}
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#define OPAL_HAVE_FORTRAN_REAL16 ${OPAL_HAVE_FORTRAN_REAL16}
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  /* Whether we have FORTRAN REAL*2 or not */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#define OMPI_HAVE_FORTRAN_REAL2 ${OMPI_HAVE_FORTRAN_REAL2}
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#define OPAL_HAVE_FORTRAN_REAL2 ${OPAL_HAVE_FORTRAN_REAL2}
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  /* Whether we have FORTRAN REAL*4 or not */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#define OMPI_HAVE_FORTRAN_REAL4 ${OMPI_HAVE_FORTRAN_REAL4}
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#define OPAL_HAVE_FORTRAN_REAL4 ${OPAL_HAVE_FORTRAN_REAL4}
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  /* Whether we have FORTRAN REAL*8 or not */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#define OMPI_HAVE_FORTRAN_REAL8 ${OMPI_HAVE_FORTRAN_REAL8}
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#define OPAL_HAVE_FORTRAN_REAL8 ${OPAL_HAVE_FORTRAN_REAL8}
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  /* Type of MPI_Offset -- has to be defined here and typedef'ed
</span><br>
<span class="quotelev3">&gt;&gt;&gt; later because mpi.h does not get AC SUBST's */
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #cmakedefine OMPI_MPI_OFFSET_TYPE ${OMPI_MPI_OFFSET_TYPE_STRING}
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -144,10 +144,10 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  /* A  type that allows us to have sentinel type values that are still
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     valid */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#cmakedefine ompi_fortran_bogus_type_t ${ompi_fortran_bogus_type_t}
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#cmakedefine opal_fortran_bogus_type_t ${opal_fortran_bogus_type_t}
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  /* C type corresponding to FORTRAN INTEGER */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#cmakedefine ompi_fortran_integer_t ${ompi_fortran_integer_t}
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#cmakedefine opal_fortran_integer_t ${opal_fortran_integer_t}
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  /* Whether C compiler supports -fvisibility */
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #cmakedefine OPAL_C_HAVE_VISIBILITY ${OPAL_C_HAVE_VISIBILITY}
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -175,8 +175,8 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #ifndef MPI_Fint
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -/* MPI_Fint is the same as ompi_fortran_INTEGER_t */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#define MPI_Fint ompi_fortran_integer_t
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +/* MPI_Fint is the same as opal_fortran_integer_t */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#define MPI_Fint opal_fortran_integer_t
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #endif /* #ifndef OMPI_CONFIG_H */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -747,52 +747,52 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  OMPI_DECLSPEC extern struct ompi_predefined_datatype_t
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ompi_mpi_cxx_bool;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  OMPI_DECLSPEC extern struct ompi_predefined_datatype_t
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ompi_mpi_2cplex, ompi_mpi_2dblcplex;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  /* other MPI2 datatypes */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_HAVE_FORTRAN_LOGICAL1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_HAVE_FORTRAN_LOGICAL1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  OMPI_DECLSPEC extern struct ompi_predefined_datatype_t
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ompi_mpi_logical1;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_HAVE_FORTRAN_LOGICAL2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_HAVE_FORTRAN_LOGICAL2
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  OMPI_DECLSPEC extern struct ompi_predefined_datatype_t
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ompi_mpi_logical2;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_HAVE_FORTRAN_LOGICAL4
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_HAVE_FORTRAN_LOGICAL4
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  OMPI_DECLSPEC extern struct ompi_predefined_datatype_t
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ompi_mpi_logical4;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_HAVE_FORTRAN_LOGICAL8
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_HAVE_FORTRAN_LOGICAL8
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  OMPI_DECLSPEC extern struct ompi_predefined_datatype_t
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ompi_mpi_logical8;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_HAVE_FORTRAN_INTEGER1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_HAVE_FORTRAN_INTEGER1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  OMPI_DECLSPEC extern struct ompi_predefined_datatype_t
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ompi_mpi_integer1;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_HAVE_FORTRAN_INTEGER2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_HAVE_FORTRAN_INTEGER2
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  OMPI_DECLSPEC extern struct ompi_predefined_datatype_t
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ompi_mpi_integer2;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_HAVE_FORTRAN_INTEGER4
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_HAVE_FORTRAN_INTEGER4
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  OMPI_DECLSPEC extern struct ompi_predefined_datatype_t
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ompi_mpi_integer4;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_HAVE_FORTRAN_INTEGER8
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_HAVE_FORTRAN_INTEGER8
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  OMPI_DECLSPEC extern struct ompi_predefined_datatype_t
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ompi_mpi_integer8;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_HAVE_FORTRAN_INTEGER16
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_HAVE_FORTRAN_INTEGER16
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  OMPI_DECLSPEC extern struct ompi_predefined_datatype_t
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ompi_mpi_integer16;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_HAVE_FORTRAN_REAL2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_HAVE_FORTRAN_REAL2
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  OMPI_DECLSPEC extern struct ompi_predefined_datatype_t
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ompi_mpi_real2;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_HAVE_FORTRAN_REAL4
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_HAVE_FORTRAN_REAL4
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  OMPI_DECLSPEC extern struct ompi_predefined_datatype_t
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ompi_mpi_real4;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_HAVE_FORTRAN_REAL8
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_HAVE_FORTRAN_REAL8
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  OMPI_DECLSPEC extern struct ompi_predefined_datatype_t
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ompi_mpi_real8;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_HAVE_FORTRAN_REAL16
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_HAVE_FORTRAN_REAL16
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  OMPI_DECLSPEC extern struct ompi_predefined_datatype_t
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ompi_mpi_real16;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_HAVE_FORTRAN_REAL4
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_HAVE_FORTRAN_REAL4
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  OMPI_DECLSPEC extern struct ompi_predefined_datatype_t
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ompi_mpi_complex8;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_HAVE_FORTRAN_REAL8
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_HAVE_FORTRAN_REAL8
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  OMPI_DECLSPEC extern struct ompi_predefined_datatype_t
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ompi_mpi_complex16;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_HAVE_FORTRAN_REAL16
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_HAVE_FORTRAN_REAL16
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  OMPI_DECLSPEC extern struct ompi_predefined_datatype_t
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ompi_mpi_complex32;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -866,53 +866,53 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  /* Fortran datatype bindings */
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #define MPI_CHARACTER OMPI_PREDEFINED_GLOBAL(MPI_Datatype,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ompi_mpi_character)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #define MPI_LOGICAL OMPI_PREDEFINED_GLOBAL(MPI_Datatype,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ompi_mpi_logic)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_HAVE_FORTRAN_LOGICAL1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_HAVE_FORTRAN_LOGICAL1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #define MPI_LOGICAL1 OMPI_PREDEFINED_GLOBAL(MPI_Datatype,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ompi_mpi_logical1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_HAVE_FORTRAN_LOGICAL2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_HAVE_FORTRAN_LOGICAL2
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #define MPI_LOGICAL2 OMPI_PREDEFINED_GLOBAL(MPI_Datatype,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ompi_mpi_logical2)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_HAVE_FORTRAN_LOGICAL4
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_HAVE_FORTRAN_LOGICAL4
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #define MPI_LOGICAL4 OMPI_PREDEFINED_GLOBAL(MPI_Datatype,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ompi_mpi_logical4)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_HAVE_FORTRAN_LOGICAL8
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_HAVE_FORTRAN_LOGICAL8
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #define MPI_LOGICAL8 OMPI_PREDEFINED_GLOBAL(MPI_Datatype,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ompi_mpi_logical8)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #define MPI_INTEGER OMPI_PREDEFINED_GLOBAL(MPI_Datatype,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ompi_mpi_integer)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_HAVE_FORTRAN_INTEGER1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_HAVE_FORTRAN_INTEGER1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #define MPI_INTEGER1 OMPI_PREDEFINED_GLOBAL(MPI_Datatype,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ompi_mpi_integer1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_HAVE_FORTRAN_INTEGER2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_HAVE_FORTRAN_INTEGER2
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #define MPI_INTEGER2 OMPI_PREDEFINED_GLOBAL(MPI_Datatype,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ompi_mpi_integer2)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_HAVE_FORTRAN_INTEGER4
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_HAVE_FORTRAN_INTEGER4
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #define MPI_INTEGER4 OMPI_PREDEFINED_GLOBAL(MPI_Datatype,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ompi_mpi_integer4)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_HAVE_FORTRAN_INTEGER8
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_HAVE_FORTRAN_INTEGER8
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #define MPI_INTEGER8 OMPI_PREDEFINED_GLOBAL(MPI_Datatype,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ompi_mpi_integer8)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_HAVE_FORTRAN_INTEGER16
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_HAVE_FORTRAN_INTEGER16
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #define MPI_INTEGER16 OMPI_PREDEFINED_GLOBAL(MPI_Datatype,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ompi_mpi_integer16)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #define MPI_REAL OMPI_PREDEFINED_GLOBAL(MPI_Datatype, ompi_mpi_real)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_HAVE_FORTRAN_REAL4
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_HAVE_FORTRAN_REAL4
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #define MPI_REAL4 OMPI_PREDEFINED_GLOBAL(MPI_Datatype,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ompi_mpi_real4)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_HAVE_FORTRAN_REAL8
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_HAVE_FORTRAN_REAL8
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #define MPI_REAL8 OMPI_PREDEFINED_GLOBAL(MPI_Datatype,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ompi_mpi_real8)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_HAVE_FORTRAN_REAL16
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_HAVE_FORTRAN_REAL16
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #define MPI_REAL16 OMPI_PREDEFINED_GLOBAL(MPI_Datatype,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ompi_mpi_real16)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #define MPI_DOUBLE_PRECISION OMPI_PREDEFINED_GLOBAL(MPI_Datatype,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ompi_mpi_dblprec)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #define MPI_COMPLEX OMPI_PREDEFINED_GLOBAL(MPI_Datatype,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ompi_mpi_cplex)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_HAVE_FORTRAN_REAL4
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_HAVE_FORTRAN_REAL4
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #define MPI_COMPLEX8 OMPI_PREDEFINED_GLOBAL(MPI_Datatype,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ompi_mpi_complex8)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_HAVE_FORTRAN_REAL8
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_HAVE_FORTRAN_REAL8
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #define MPI_COMPLEX16 OMPI_PREDEFINED_GLOBAL(MPI_Datatype,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ompi_mpi_complex16)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_HAVE_FORTRAN_REAL16
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_HAVE_FORTRAN_REAL16
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #define MPI_COMPLEX32 OMPI_PREDEFINED_GLOBAL(MPI_Datatype,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ompi_mpi_complex32)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #define MPI_DOUBLE_COMPLEX OMPI_PREDEFINED_GLOBAL(MPI_Datatype,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ompi_mpi_dblcplex)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Modified: trunk/contrib/platform/win32/ConfigFiles/opal_config.h.cmake
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ======================================================================
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --- trunk/contrib/platform/win32/ConfigFiles/
</span><br>
<span class="quotelev3">&gt;&gt;&gt; opal_config.h.cmake        (original)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +++ trunk/contrib/platform/win32/ConfigFiles/
</span><br>
<span class="quotelev3">&gt;&gt;&gt; opal_config.h.cmake        2009-05-30 11:54:29 EDT (Sat, 30 May 2009)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -637,76 +637,76 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #define OPAL_ALIGNMENT_CHAR ${CHAR_ALIGNMENT}
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  /* Alignment of type bool */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#define OMPI_ALIGNMENT_CXX_BOOL ${BOOL_ALIGNMENT}
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#define OPAL_ALIGNMENT_CXX_BOOL ${BOOL_ALIGNMENT}
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  /* Alignment of type double */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#define OMPI_ALIGNMENT_DOUBLE ${DOUBLE_ALIGNMENT}
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#define OPAL_ALIGNMENT_DOUBLE ${DOUBLE_ALIGNMENT}
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  /* Alignment of type float */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#define OMPI_ALIGNMENT_FLOAT ${FLOAT_ALIGNMENT}
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#define OPAL_ALIGNMENT_FLOAT ${FLOAT_ALIGNMENT}
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  /* Alignment of Fortran 77 COMPLEX */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#define OMPI_ALIGNMENT_FORTRAN_COMPLEX $
</span><br>
<span class="quotelev3">&gt;&gt;&gt; {OMPI_ALIGNMENT_FORTRAN_COMPLEX}
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#define OPAL_ALIGNMENT_FORTRAN_COMPLEX $
</span><br>
<span class="quotelev3">&gt;&gt;&gt; {OPAL_ALIGNMENT_FORTRAN_COMPLEX}
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  /* Alignment of Fortran 77 COMPLEX*16 */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#define OMPI_ALIGNMENT_FORTRAN_COMPLEX16 $
</span><br>
<span class="quotelev3">&gt;&gt;&gt; {OMPI_ALIGNMENT_FORTRAN_COMPLEX16}
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#define OPAL_ALIGNMENT_FORTRAN_COMPLEX16 $
</span><br>
<span class="quotelev3">&gt;&gt;&gt; {OPAL_ALIGNMENT_FORTRAN_COMPLEX16}
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  /* Alignment of Fortran 77 COMPLEX*32 */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#define OMPI_ALIGNMENT_FORTRAN_COMPLEX32 $
</span><br>
<span class="quotelev3">&gt;&gt;&gt; {OMPI_ALIGNMENT_FORTRAN_COMPLEX32}
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#define OPAL_ALIGNMENT_FORTRAN_COMPLEX32 $
</span><br>
<span class="quotelev3">&gt;&gt;&gt; {OPAL_ALIGNMENT_FORTRAN_COMPLEX32}
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  /* Alignment of Fortran 77 COMPLEX*8 */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#define OMPI_ALIGNMENT_FORTRAN_COMPLEX8 $
</span><br>
<span class="quotelev3">&gt;&gt;&gt; {OMPI_ALIGNMENT_FORTRAN_COMPLEX8}
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#define OPAL_ALIGNMENT_FORTRAN_COMPLEX8 $
</span><br>
<span class="quotelev3">&gt;&gt;&gt; {OPAL_ALIGNMENT_FORTRAN_COMPLEX8}
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  /* Alignment of Fortran 77 DOUBLE PRECISION */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#define OMPI_ALIGNMENT_FORTRAN_DOUBLE_PRECISION $
</span><br>
<span class="quotelev3">&gt;&gt;&gt; {OMPI_ALIGNMENT_FORTRAN_DOUBLE_PRECISION}
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#define OPAL_ALIGNMENT_FORTRAN_DOUBLE_PRECISION $
</span><br>
<span class="quotelev3">&gt;&gt;&gt; {OPAL_ALIGNMENT_FORTRAN_DOUBLE_PRECISION}
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  /* Alignment of Fortran 77 INTEGER */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#define OMPI_ALIGNMENT_FORTRAN_INTEGER $
</span><br>
<span class="quotelev3">&gt;&gt;&gt; {OMPI_ALIGNMENT_FORTRAN_INTEGER}
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#define OPAL_ALIGNMENT_FORTRAN_INTEGER $
</span><br>
<span class="quotelev3">&gt;&gt;&gt; {OPAL_ALIGNMENT_FORTRAN_INTEGER}
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  /* Alignment of Fortran 77 INTEGER*1 */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#define OMPI_ALIGNMENT_FORTRAN_INTEGER1 $
</span><br>
<span class="quotelev3">&gt;&gt;&gt; {OMPI_ALIGNMENT_FORTRAN_INTEGER1}
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#define OPAL_ALIGNMENT_FORTRAN_INTEGER1 $
</span><br>
<span class="quotelev3">&gt;&gt;&gt; {OPAL_ALIGNMENT_FORTRAN_INTEGER1}
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  /* Alignment of Fortran 77 INTEGER*16 */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#define OMPI_ALIGNMENT_FORTRAN_INTEGER16 $
</span><br>
<span class="quotelev3">&gt;&gt;&gt; {OMPI_ALIGNMENT_FORTRAN_INTEGER16}
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#define OPAL_ALIGNMENT_FORTRAN_INTEGER16 $
</span><br>
<span class="quotelev3">&gt;&gt;&gt; {OPAL_ALIGNMENT_FORTRAN_INTEGER16}
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  /* Alignment of Fortran 77 INTEGER*2 */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#define OMPI_ALIGNMENT_FORTRAN_INTEGER2 $
</span><br>
<span class="quotelev3">&gt;&gt;&gt; {OMPI_ALIGNMENT_FORTRAN_INTEGER2}
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#define OPAL_ALIGNMENT_FORTRAN_INTEGER2 $
</span><br>
<span class="quotelev3">&gt;&gt;&gt; {OPAL_ALIGNMENT_FORTRAN_INTEGER2}
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  /* Alignment of Fortran 77 INTEGER*4 */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#define OMPI_ALIGNMENT_FORTRAN_INTEGER4 $
</span><br>
<span class="quotelev3">&gt;&gt;&gt; {OMPI_ALIGNMENT_FORTRAN_INTEGER4}
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#define OPAL_ALIGNMENT_FORTRAN_INTEGER4 $
</span><br>
<span class="quotelev3">&gt;&gt;&gt; {OPAL_ALIGNMENT_FORTRAN_INTEGER4}
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  /* Alignment of Fortran 77 INTEGER*8 */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#define OMPI_ALIGNMENT_FORTRAN_INTEGER8 $
</span><br>
<span class="quotelev3">&gt;&gt;&gt; {OMPI_ALIGNMENT_FORTRAN_INTEGER8}
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#define OPAL_ALIGNMENT_FORTRAN_INTEGER8 $
</span><br>
<span class="quotelev3">&gt;&gt;&gt; {OPAL_ALIGNMENT_FORTRAN_INTEGER8}
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  /* Alignment of Fortran 77 LOGICAL */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#define OMPI_ALIGNMENT_FORTRAN_LOGICAL $
</span><br>
<span class="quotelev3">&gt;&gt;&gt; {OMPI_ALIGNMENT_FORTRAN_LOGICAL}
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#define OPAL_ALIGNMENT_FORTRAN_LOGICAL $
</span><br>
<span class="quotelev3">&gt;&gt;&gt; {OPAL_ALIGNMENT_FORTRAN_LOGICAL}
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  /* Alignment of Fortran 77 LOGICAL*1 */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#define OMPI_ALIGNMENT_FORTRAN_LOGICAL1 $
</span><br>
<span class="quotelev3">&gt;&gt;&gt; {OMPI_ALIGNMENT_FORTRAN_LOGICAL1}
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#define OPAL_ALIGNMENT_FORTRAN_LOGICAL1 $
</span><br>
<span class="quotelev3">&gt;&gt;&gt; {OPAL_ALIGNMENT_FORTRAN_LOGICAL1}
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  /* Alignment of Fortran 77 LOGICAL*2 */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#define OMPI_ALIGNMENT_FORTRAN_LOGICAL2 $
</span><br>
<span class="quotelev3">&gt;&gt;&gt; {OMPI_ALIGNMENT_FORTRAN_LOGICAL2}
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#define OPAL_ALIGNMENT_FORTRAN_LOGICAL2 $
</span><br>
<span class="quotelev3">&gt;&gt;&gt; {OPAL_ALIGNMENT_FORTRAN_LOGICAL2}
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  /* Alignment of Fortran 77 LOGICAL*4 */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#define OMPI_ALIGNMENT_FORTRAN_LOGICAL4 $
</span><br>
<span class="quotelev3">&gt;&gt;&gt; {OMPI_ALIGNMENT_FORTRAN_LOGICAL4}
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#define OPAL_ALIGNMENT_FORTRAN_LOGICAL4 $
</span><br>
<span class="quotelev3">&gt;&gt;&gt; {OPAL_ALIGNMENT_FORTRAN_LOGICAL4}
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  /* Alignment of Fortran 77 LOGICAL*8 */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#define OMPI_ALIGNMENT_FORTRAN_LOGICAL8 $
</span><br>
<span class="quotelev3">&gt;&gt;&gt; {OMPI_ALIGNMENT_FORTRAN_LOGICAL8}
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#define OPAL_ALIGNMENT_FORTRAN_LOGICAL8 $
</span><br>
<span class="quotelev3">&gt;&gt;&gt; {OPAL_ALIGNMENT_FORTRAN_LOGICAL8}
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  /* Alignment of Fortran 77 REAL */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#define OMPI_ALIGNMENT_FORTRAN_REAL ${OMPI_ALIGNMENT_FORTRAN_REAL}
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#define OPAL_ALIGNMENT_FORTRAN_REAL ${OPAL_ALIGNMENT_FORTRAN_REAL}
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  /* Alignment of Fortran 77 REAL*16 */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#define OMPI_ALIGNMENT_FORTRAN_REAL16 $
</span><br>
<span class="quotelev3">&gt;&gt;&gt; {OMPI_ALIGNMENT_FORTRAN_REAL16}
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#define OPAL_ALIGNMENT_FORTRAN_REAL16 $
</span><br>
<span class="quotelev3">&gt;&gt;&gt; {OPAL_ALIGNMENT_FORTRAN_REAL16}
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  /* Alignment of Fortran 77 REAL*2 */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#define OMPI_ALIGNMENT_FORTRAN_REAL2 ${OMPI_ALIGNMENT_FORTRAN_REAL2}
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#define OPAL_ALIGNMENT_FORTRAN_REAL2 ${OPAL_ALIGNMENT_FORTRAN_REAL2}
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  /* Alignment of Fortran 77 REAL*4 */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#define OMPI_ALIGNMENT_FORTRAN_REAL4 ${OMPI_ALIGNMENT_FORTRAN_REAL4}
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#define OPAL_ALIGNMENT_FORTRAN_REAL4 ${OPAL_ALIGNMENT_FORTRAN_REAL4}
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  /* Alignment of Fortran 77 REAL*8 */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#define OMPI_ALIGNMENT_FORTRAN_REAL8 ${OMPI_ALIGNMENT_FORTRAN_REAL8}
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#define OPAL_ALIGNMENT_FORTRAN_REAL8 ${OPAL_ALIGNMENT_FORTRAN_REAL8}
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  /* Alignment of type int */
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #define OPAL_ALIGNMENT_INT ${INT_ALIGNMENT}
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -724,10 +724,10 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #define OPAL_ALIGNMENT_SHORT ${SHORT_ALIGNMENT}
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  /* Alignment of type void * */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#define OMPI_ALIGNMENT_VOID_P ${VOID_P_ALIGNMENT}
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#define OPAL_ALIGNMENT_VOID_P ${VOID_P_ALIGNMENT}
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  /* Alignment of type wchar_t */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#define OMPI_ALIGNMENT_WCHAR ${WCHAR_T_ALIGNMENT}
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#define OPAL_ALIGNMENT_WCHAR ${WCHAR_T_ALIGNMENT}
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  /* OMPI architecture string */
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #define OPAL_ARCH &quot;${CMAKE_SYSTEM_PROCESSOR} ${CMAKE_SYSTEM}&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -852,10 +852,10 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  /* Max handle value for fortran MPI handles, effectively
</span><br>
<span class="quotelev3">&gt;&gt;&gt; min(INT_MAX, max
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     fortran INTEGER value) */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#cmakedefine OMPI_FORTRAN_HANDLE_MAX ${OMPI_FORTRAN_HANDLE_MAX}
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#cmakedefine OPAL_FORTRAN_HANDLE_MAX ${OPAL_FORTRAN_HANDLE_MAX}
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  /* Fortran value for LOGICAL .TRUE. value */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#define OMPI_FORTRAN_VALUE_TRUE ${OMPI_FORTRAN_VALUE_TRUE}
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#define OPAL_FORTRAN_VALUE_TRUE ${OPAL_FORTRAN_VALUE_TRUE}
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  /* Greek - alpha, beta, etc - release number of Open MPI */
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #cmakedefine OMPI_GREEK_VERSION &quot;${OMPI_GREEK_VERSION_STRING}&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -927,123 +927,123 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #define OMPI_HAVE_CXX_EXCEPTION_SUPPORT $
</span><br>
<span class="quotelev3">&gt;&gt;&gt; {OMPI_HAVE_CXX_EXCEPTION_SUPPORT}
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  /* Whether we have Fortran 90 $ofc_fortran_type or not */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#cmakedefine OMPI_HAVE_F90_COMPLEX
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#cmakedefine OPAL_HAVE_F90_COMPLEX
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  /* Whether we have Fortran 90 $ofc_fortran_type or not */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#cmakedefine OMPI_HAVE_F90_COMPLEX16
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#cmakedefine OPAL_HAVE_F90_COMPLEX16
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  /* Whether we have Fortran 90 $ofc_fortran_type or not */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#cmakedefine OMPI_HAVE_F90_COMPLEX32
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#cmakedefine OPAL_HAVE_F90_COMPLEX32
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  /* Whether we have Fortran 90 $ofc_fortran_type or not */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#cmakedefine OMPI_HAVE_F90_COMPLEX8
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#cmakedefine OPAL_HAVE_F90_COMPLEX8
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  /* Whether we have Fortran 90 $ofc_fortran_type or not */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#cmakedefine OMPI_HAVE_F90_DOUBLE_COMPLEX
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#cmakedefine OPAL_HAVE_F90_DOUBLE_COMPLEX
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  /* Whether we have Fortran 90 $ofc_fortran_type or not */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#cmakedefine OMPI_HAVE_F90_DOUBLE_PRECISION
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#cmakedefine OPAL_HAVE_F90_DOUBLE_PRECISION
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  /* Whether we have Fortran 90 $ofc_fortran_type or not */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#cmakedefine OMPI_HAVE_F90_INTEGER
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#cmakedefine OPAL_HAVE_F90_INTEGER
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  /* Whether we have Fortran 90 $ofc_fortran_type or not */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#cmakedefine OMPI_HAVE_F90_INTEGER1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#cmakedefine OPAL_HAVE_F90_INTEGER1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  /* Whether we have Fortran 90 $ofc_fortran_type or not */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#cmakedefine OMPI_HAVE_F90_INTEGER16
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#cmakedefine OPAL_HAVE_F90_INTEGER16
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  /* Whether we have Fortran 90 $ofc_fortran_type or not */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#cmakedefine OMPI_HAVE_F90_INTEGER2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#cmakedefine OPAL_HAVE_F90_INTEGER2
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  /* Whether we have Fortran 90 $ofc_fortran_type or not */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#cmakedefine OMPI_HAVE_F90_INTEGER4
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#cmakedefine OPAL_HAVE_F90_INTEGER4
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  /* Whether we have Fortran 90 $ofc_fortran_type or not */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#cmakedefine OMPI_HAVE_F90_INTEGER8
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#cmakedefine OPAL_HAVE_F90_INTEGER8
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  /* Whether we have Fortran 90 $ofc_fortran_type or not */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#cmakedefine OMPI_HAVE_F90_LOGICAL
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#cmakedefine OPAL_HAVE_F90_LOGICAL
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  /* Whether we have Fortran 90 $ofc_fortran_type or not */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#cmakedefine OMPI_HAVE_F90_REAL
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#cmakedefine OPAL_HAVE_F90_REAL
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  /* Whether we have Fortran 90 $ofc_fortran_type or not */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#cmakedefine OMPI_HAVE_F90_REAL16
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#cmakedefine OPAL_HAVE_F90_REAL16
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  /* Whether we have Fortran 90 $ofc_fortran_type or not */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#cmakedefine OMPI_HAVE_F90_REAL2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#cmakedefine OPAL_HAVE_F90_REAL2
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  /* Whether we have Fortran 90 $ofc_fortran_type or not */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#cmakedefine OMPI_HAVE_F90_REAL4
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#cmakedefine OPAL_HAVE_F90_REAL4
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  /* Whether we have Fortran 90 $ofc_fortran_type or not */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#cmakedefine OMPI_HAVE_F90_REAL8
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#cmakedefine OPAL_HAVE_F90_REAL8
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  /* Whether we have Fortran 77 COMPLEX or not */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#define OMPI_HAVE_FORTRAN_COMPLEX ${OMPI_HAVE_FORTRAN_COMPLEX}
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#define OPAL_HAVE_FORTRAN_COMPLEX ${OPAL_HAVE_FORTRAN_COMPLEX}
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  /* Whether we have Fortran 77 COMPLEX*16 or not */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#define OMPI_HAVE_FORTRAN_COMPLEX16 ${OMPI_HAVE_FORTRAN_COMPLEX16}
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#define OPAL_HAVE_FORTRAN_COMPLEX16 ${OPAL_HAVE_FORTRAN_COMPLEX16}
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  /* Whether we have Fortran 77 COMPLEX*32 or not */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#define OMPI_HAVE_FORTRAN_COMPLEX32 ${OMPI_HAVE_FORTRAN_COMPLEX32}
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#define OPAL_HAVE_FORTRAN_COMPLEX32 ${OPAL_HAVE_FORTRAN_COMPLEX32}
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  /* Whether we have Fortran 77 COMPLEX*8 or not */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#define OMPI_HAVE_FORTRAN_COMPLEX8 ${OMPI_HAVE_FORTRAN_COMPLEX8}
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#define OPAL_HAVE_FORTRAN_COMPLEX8 ${OPAL_HAVE_FORTRAN_COMPLEX8}
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  /* Whether we have Fortran 77 DOUBLE PRECISION or not */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#define OMPI_HAVE_FORTRAN_DOUBLE_PRECISION $
</span><br>
<span class="quotelev3">&gt;&gt;&gt; {OMPI_HAVE_FORTRAN_DOUBLE_PRECISION}
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#define OPAL_HAVE_FORTRAN_DOUBLE_PRECISION $
</span><br>
<span class="quotelev3">&gt;&gt;&gt; {OPAL_HAVE_FORTRAN_DOUBLE_PRECISION}
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  /* Whether we have Fortran 77 INTEGER or not */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#define OMPI_HAVE_FORTRAN_INTEGER ${OMPI_HAVE_FORTRAN_INTEGER}
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#define OPAL_HAVE_FORTRAN_INTEGER ${OPAL_HAVE_FORTRAN_INTEGER}
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  /* Whether we have Fortran 77 INTEGER*1 or not */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#define OMPI_HAVE_FORTRAN_INTEGER1 ${OMPI_HAVE_FORTRAN_INTEGER1}
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#define OPAL_HAVE_FORTRAN_INTEGER1 ${OPAL_HAVE_FORTRAN_INTEGER1}
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  /* Whether we have Fortran 77 INTEGER*16 or not */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#define OMPI_HAVE_FORTRAN_INTEGER16 ${OMPI_HAVE_FORTRAN_INTEGER16}
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#define OPAL_HAVE_FORTRAN_INTEGER16 ${OPAL_HAVE_FORTRAN_INTEGER16}
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  /* Whether we have Fortran 77 INTEGER*2 or not */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#define OMPI_HAVE_FORTRAN_INTEGER2 ${OMPI_HAVE_FORTRAN_INTEGER2}
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#define OPAL_HAVE_FORTRAN_INTEGER2 ${OPAL_HAVE_FORTRAN_INTEGER2}
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  /* Whether we have Fortran 77 INTEGER*4 or not */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#define OMPI_HAVE_FORTRAN_INTEGER4 ${OMPI_HAVE_FORTRAN_INTEGER4}
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#define OPAL_HAVE_FORTRAN_INTEGER4 ${OPAL_HAVE_FORTRAN_INTEGER4}
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  /* Whether we have Fortran 77 INTEGER*8 or not */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#define OMPI_HAVE_FORTRAN_INTEGER8 ${OMPI_HAVE_FORTRAN_INTEGER8}
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#define OPAL_HAVE_FORTRAN_INTEGER8 ${OPAL_HAVE_FORTRAN_INTEGER8}
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  /* Whether we have Fortran 77 LOGICAL or not */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#define OMPI_HAVE_FORTRAN_LOGICAL ${OMPI_HAVE_FORTRAN_LOGICAL}
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#define OPAL_HAVE_FORTRAN_LOGICAL ${OPAL_HAVE_FORTRAN_LOGICAL}
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  /* Whether we have Fortran 77 LOGICAL1 or not */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#define OMPI_HAVE_FORTRAN_LOGICAL1 ${OMPI_HAVE_FORTRAN_LOGICAL1}
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#define OPAL_HAVE_FORTRAN_LOGICAL1 ${OPAL_HAVE_FORTRAN_LOGICAL1}
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  /* Whether we have Fortran 77 LOGICAL2 or not */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#define OMPI_HAVE_FORTRAN_LOGICAL2 ${OMPI_HAVE_FORTRAN_LOGICAL2}
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#define OPAL_HAVE_FORTRAN_LOGICAL2 ${OPAL_HAVE_FORTRAN_LOGICAL2}
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  /* Whether we have Fortran 77 LOGICAL4 or not */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#define OMPI_HAVE_FORTRAN_LOGICAL4 ${OMPI_HAVE_FORTRAN_LOGICAL4}
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#define OPAL_HAVE_FORTRAN_LOGICAL4 ${OPAL_HAVE_FORTRAN_LOGICAL4}
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  /* Whether we have Fortran 77 LOGICAL8 or not */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#define OMPI_HAVE_FORTRAN_LOGICAL8 ${OMPI_HAVE_FORTRAN_LOGICAL8}
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#define OPAL_HAVE_FORTRAN_LOGICAL8 ${OPAL_HAVE_FORTRAN_LOGICAL8}
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  /* Whether we have Fortran 77 REAL or not */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#define OMPI_HAVE_FORTRAN_REAL ${OMPI_HAVE_FORTRAN_REAL}
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#define OPAL_HAVE_FORTRAN_REAL ${OPAL_HAVE_FORTRAN_REAL}
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  /* Whether we have Fortran 77 REAL*16 or not */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#define OMPI_HAVE_FORTRAN_REAL16 ${OMPI_HAVE_FORTRAN_REAL16}
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#define OPAL_HAVE_FORTRAN_REAL16 ${OPAL_HAVE_FORTRAN_REAL16}
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  /* Whether we have Fortran 77 REAL*2 or not */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#define OMPI_HAVE_FORTRAN_REAL2 ${OMPI_HAVE_FORTRAN_REAL2}
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#define OPAL_HAVE_FORTRAN_REAL2 ${OPAL_HAVE_FORTRAN_REAL2}
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  /* Whether we have Fortran 77 REAL*4 or not */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#define OMPI_HAVE_FORTRAN_REAL4 ${OMPI_HAVE_FORTRAN_REAL4}
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#define OPAL_HAVE_FORTRAN_REAL4 ${OPAL_HAVE_FORTRAN_REAL4}
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  /* Whether we have Fortran 77 REAL*8 or not */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#define OMPI_HAVE_FORTRAN_REAL8 ${OMPI_HAVE_FORTRAN_REAL8}
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#define OPAL_HAVE_FORTRAN_REAL8 ${OPAL_HAVE_FORTRAN_REAL8}
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#define OMPI_REAL16_MATCHES_C ${OMPI_REAL16_MATCHES_C}
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#define OPAL_REAL16_MATCHES_C ${OPAL_REAL16_MATCHES_C}
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  /* Do not use outside of mpi.h. Define to 1 if the system has the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; type 'long
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     long'. */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -1145,67 +1145,67 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #cmakedefine OMPI_RML_CNOS_HAVE_BARRIER
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  /* Size of Fortran 77 COMPLEX */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#define OMPI_SIZEOF_FORTRAN_COMPLEX ${OMPI_SIZEOF_FORTRAN_COMPLEX}
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#define OPAL_SIZEOF_FORTRAN_COMPLEX ${OPAL_SIZEOF_FORTRAN_COMPLEX}
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  /* Size of Fortran 77 COMPLEX*16 */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#define OMPI_SIZEOF_FORTRAN_COMPLEX16 $
</span><br>
<span class="quotelev3">&gt;&gt;&gt; {OMPI_SIZEOF_FORTRAN_COMPLEX16}
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#define OPAL_SIZEOF_FORTRAN_COMPLEX16 $
</span><br>
<span class="quotelev3">&gt;&gt;&gt; {OPAL_SIZEOF_FORTRAN_COMPLEX16}
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  /* Size of Fortran 77 COMPLEX*32 */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#define OMPI_SIZEOF_FORTRAN_COMPLEX32 $
</span><br>
<span class="quotelev3">&gt;&gt;&gt; {OMPI_SIZEOF_FORTRAN_COMPLEX32}
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#define OPAL_SIZEOF_FORTRAN_COMPLEX32 $
</span><br>
<span class="quotelev3">&gt;&gt;&gt; {OPAL_SIZEOF_FORTRAN_COMPLEX32}
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  /* Size of Fortran 77 COMPLEX*8 */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#define OMPI_SIZEOF_FORTRAN_COMPLEX8 ${OMPI_SIZEOF_FORTRAN_COMPLEX8}
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#define OPAL_SIZEOF_FORTRAN_COMPLEX8 ${OPAL_SIZEOF_FORTRAN_COMPLEX8}
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  /* Size of Fortran 77 DOUBLE PRECISION */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#define OMPI_SIZEOF_FORTRAN_DOUBLE_PRECISION $
</span><br>
<span class="quotelev3">&gt;&gt;&gt; {OMPI_SIZEOF_FORTRAN_DOUBLE_PRECISION}
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#define OPAL_SIZEOF_FORTRAN_DOUBLE_PRECISION $
</span><br>
<span class="quotelev3">&gt;&gt;&gt; {OPAL_SIZEOF_FORTRAN_DOUBLE_PRECISION}
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  /* Size of Fortran 77 INTEGER */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#define OMPI_SIZEOF_FORTRAN_INTEGER ${OMPI_SIZEOF_FORTRAN_INTEGER}
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#define OPAL_SIZEOF_FORTRAN_INTEGER ${OPAL_SIZEOF_FORTRAN_INTEGER}
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  /* Size of Fortran 77 INTEGER*1 */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#define OMPI_SIZEOF_FORTRAN_INTEGER1 ${OMPI_SIZEOF_FORTRAN_INTEGER1}
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#define OPAL_SIZEOF_FORTRAN_INTEGER1 ${OPAL_SIZEOF_FORTRAN_INTEGER1}
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  /* Size of Fortran 77 INTEGER*16 */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#define OMPI_SIZEOF_FORTRAN_INTEGER16 $
</span><br>
<span class="quotelev3">&gt;&gt;&gt; {OMPI_SIZEOF_FORTRAN_INTEGER16}
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#define OPAL_SIZEOF_FORTRAN_INTEGER16 $
</span><br>
<span class="quotelev3">&gt;&gt;&gt; {OPAL_SIZEOF_FORTRAN_INTEGER16}
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  /* Size of Fortran 77 INTEGER*2 */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#define OMPI_SIZEOF_FORTRAN_INTEGER2 ${OMPI_SIZEOF_FORTRAN_INTEGER2}
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#define OPAL_SIZEOF_FORTRAN_INTEGER2 ${OPAL_SIZEOF_FORTRAN_INTEGER2}
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  /* Size of Fortran 77 INTEGER*4 */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#define OMPI_SIZEOF_FORTRAN_INTEGER4 ${OMPI_SIZEOF_FORTRAN_INTEGER4}
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#define OPAL_SIZEOF_FORTRAN_INTEGER4 ${OPAL_SIZEOF_FORTRAN_INTEGER4}
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  /* Size of Fortran 77 INTEGER*8 */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#define OMPI_SIZEOF_FORTRAN_INTEGER8 ${OMPI_SIZEOF_FORTRAN_INTEGER8}
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#define OPAL_SIZEOF_FORTRAN_INTEGER8 ${OPAL_SIZEOF_FORTRAN_INTEGER8}
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  /* Size of Fortran 77 LOGICAL */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#define OMPI_SIZEOF_FORTRAN_LOGICAL ${OMPI_SIZEOF_FORTRAN_LOGICAL}
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#define OPAL_SIZEOF_FORTRAN_LOGICAL ${OPAL_SIZEOF_FORTRAN_LOGICAL}
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  /* Size of Fortran 77 LOGICAL1 */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#define OMPI_SIZEOF_FORTRAN_LOGICAL1 ${OMPI_SIZEOF_FORTRAN_LOGICAL1}
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#define OPAL_SIZEOF_FORTRAN_LOGICAL1 ${OPAL_SIZEOF_FORTRAN_LOGICAL1}
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  /* Size of Fortran 77 LOGICAL2 */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#define OMPI_SIZEOF_FORTRAN_LOGICAL2 ${OMPI_SIZEOF_FORTRAN_LOGICAL2}
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#define OPAL_SIZEOF_FORTRAN_LOGICAL2 ${OPAL_SIZEOF_FORTRAN_LOGICAL2}
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  /* Size of Fortran 77 LOGICAL4 */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#define OMPI_SIZEOF_FORTRAN_LOGICAL4 ${OMPI_SIZEOF_FORTRAN_LOGICAL4}
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#define OPAL_SIZEOF_FORTRAN_LOGICAL4 ${OPAL_SIZEOF_FORTRAN_LOGICAL4}
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  /* Size of Fortran 77 LOGICAL8 */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#define OMPI_SIZEOF_FORTRAN_LOGICAL8 ${OMPI_SIZEOF_FORTRAN_LOGICAL8}
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#define OPAL_SIZEOF_FORTRAN_LOGICAL8 ${OPAL_SIZEOF_FORTRAN_LOGICAL8}
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  /* Size of Fortran 77 REAL */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#define OMPI_SIZEOF_FORTRAN_REAL ${OMPI_SIZEOF_FORTRAN_REAL}
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#define OPAL_SIZEOF_FORTRAN_REAL ${OPAL_SIZEOF_FORTRAN_REAL}
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  /* Size of Fortran 77 REAL*16 */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#define OMPI_SIZEOF_FORTRAN_REAL16 ${OMPI_SIZEOF_FORTRAN_REAL16}
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#define OPAL_SIZEOF_FORTRAN_REAL16 ${OPAL_SIZEOF_FORTRAN_REAL16}
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  /* Size of Fortran 77 REAL*2 */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#define OMPI_SIZEOF_FORTRAN_REAL2 ${OMPI_SIZEOF_FORTRAN_REAL2}
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#define OPAL_SIZEOF_FORTRAN_REAL2 ${OPAL_SIZEOF_FORTRAN_REAL2}
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  /* Size of Fortran 77 REAL*4 */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#define OMPI_SIZEOF_FORTRAN_REAL4 ${OMPI_SIZEOF_FORTRAN_REAL4}
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#define OPAL_SIZEOF_FORTRAN_REAL4 ${OPAL_SIZEOF_FORTRAN_REAL4}
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  /* Size of Fortran 77 REAL*8 */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#define OMPI_SIZEOF_FORTRAN_REAL8 ${OMPI_SIZEOF_FORTRAN_REAL8}
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#define OPAL_SIZEOF_FORTRAN_REAL8 ${OPAL_SIZEOF_FORTRAN_REAL8}
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  /* Do threads have different pids (pthreads on linux) */
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #cmakedefine OPAL_THREADS_HAVE_DIFFERENT_PIDS
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -1420,70 +1420,70 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  /* A bogus type that allows us to have sentinel type values that
</span><br>
<span class="quotelev3">&gt;&gt;&gt; are still
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     valid */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#cmakedefine ompi_fortran_bogus_type_t ${ompi_fortran_bogus_type_t}
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#cmakedefine opal_fortran_bogus_type_t ${opal_fortran_bogus_type_t}
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  /* C type corresponding to Fortran 77 COMPLEX*16 */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#cmakedefine ompi_fortran_complex16_t ${ompi_fortran_complex16_t}
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#cmakedefine opal_fortran_complex16_t ${opal_fortran_complex16_t}
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  /* C type corresponding to Fortran 77 COMPLEX*32 */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#cmakedefine ompi_fortran_complex32_t ${ompi_fortran_complex32_t}
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#cmakedefine opal_fortran_complex32_t ${opal_fortran_complex32_t}
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  /* C type corresponding to Fortran 77 COMPLEX*8 */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#cmakedefine ompi_fortran_complex8_t ${ompi_fortran_complex8_t}
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#cmakedefine opal_fortran_complex8_t ${opal_fortran_complex8_t}
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  /* C type corresponding to Fortran 77 COMPLEX */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#cmakedefine ompi_fortran_complex_t ${ompi_fortran_complex_t}
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#cmakedefine opal_fortran_complex_t ${opal_fortran_complex_t}
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  /* C type corresponding to Fortran 77 DOUBLE PRECISION */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#cmakedefine ompi_fortran_double_precision_t $
</span><br>
<span class="quotelev3">&gt;&gt;&gt; {ompi_fortran_double_precision_t}
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#cmakedefine opal_fortran_double_precision_t $
</span><br>
<span class="quotelev3">&gt;&gt;&gt; {opal_fortran_double_precision_t}
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  /* C type corresponding to Fortran 77 INTEGER*16 */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#cmakedefine ompi_fortran_integer16_t ${ompi_fortran_integer16_t}
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#cmakedefine opal_fortran_integer16_t ${opal_fortran_integer16_t}
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  /* C type corresponding to Fortran 77 INTEGER*1 */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#cmakedefine ompi_fortran_integer1_t ${ompi_fortran_integer1_t}
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#cmakedefine opal_fortran_integer1_t ${opal_fortran_integer1_t}
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  /* C type corresponding to Fortran 77 INTEGER*2 */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#cmakedefine ompi_fortran_integer2_t ${ompi_fortran_integer2_t}
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#cmakedefine opal_fortran_integer2_t ${opal_fortran_integer2_t}
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  /* C type corresponding to Fortran 77 INTEGER*4 */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#cmakedefine ompi_fortran_integer4_t ${ompi_fortran_integer4_t}
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#cmakedefine opal_fortran_integer4_t ${opal_fortran_integer4_t}
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  /* C type corresponding to Fortran 77 INTEGER*8 */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#cmakedefine ompi_fortran_integer8_t ${ompi_fortran_integer8_t}
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#cmakedefine opal_fortran_integer8_t ${opal_fortran_integer8_t}
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  /* C type corresponding to Fortran 77 INTEGER */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#cmakedefine ompi_fortran_integer_t ${ompi_fortran_integer_t}
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#cmakedefine opal_fortran_integer_t ${opal_fortran_integer_t}
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  /* C type corresponding to Fortran 77 LOGICAL */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#cmakedefine ompi_fortran_logical_t ${ompi_fortran_logical_t}
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#cmakedefine opal_fortran_logical_t ${opal_fortran_logical_t}
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  /* C type corresponding to Fortran 77 LOGICAL*1 */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#cmakedefine ompi_fortran_logical1_t ${ompi_fortran_logical1_t}
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#cmakedefine opal_fortran_logical1_t ${opal_fortran_logical1_t}
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  /* C type corresponding to Fortran 77 LOGICAL*2 */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#cmakedefine ompi_fortran_logical2_t ${ompi_fortran_logical2_t}
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#cmakedefine opal_fortran_logical2_t ${opal_fortran_logical2_t}
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  /* C type corresponding to Fortran 77 LOGICAL*4 */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#cmakedefine ompi_fortran_logical4_t ${ompi_fortran_logical4_t}
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#cmakedefine opal_fortran_logical4_t ${opal_fortran_logical4_t}
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  /* C type corresponding to Fortran 77 LOGICAL*8 */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#cmakedefine ompi_fortran_logical8_t ${ompi_fortran_logical8_t}
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#cmakedefine opal_fortran_logical8_t ${opal_fortran_logical8_t}
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  /* C type corresponding to Fortran 77 REAL*16 */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#cmakedefine ompi_fortran_real16_t ${ompi_fortran_real16_t}
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#cmakedefine opal_fortran_real16_t ${opal_fortran_real16_t}
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  /* C type corresponding to Fortran 77 REAL*2 */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#cmakedefine ompi_fortran_real2_t ${ompi_fortran_real2_t}
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#cmakedefine opal_fortran_real2_t ${opal_fortran_real2_t}
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  /* C type corresponding to Fortran 77 REAL*4 */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#cmakedefine ompi_fortran_real4_t ${ompi_fortran_real4_t}
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#cmakedefine opal_fortran_real4_t ${opal_fortran_real4_t}
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  /* C type corresponding to Fortran 77 REAL*8 */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#cmakedefine ompi_fortran_real8_t ${ompi_fortran_real8_t}
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#cmakedefine opal_fortran_real8_t ${opal_fortran_real8_t}
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  /* C type corresponding to Fortran 77 REAL */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#cmakedefine ompi_fortran_real_t ${ompi_fortran_real_t}
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#cmakedefine opal_fortran_real_t ${opal_fortran_real_t}
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  /* Define to `int' if &lt;sys/types.h&gt; does not define. */
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #define pid_t ${PID_T}
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Modified: trunk/ompi/attribute/attribute.c
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ======================================================================
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --- trunk/ompi/attribute/attribute.c    (original)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +++ trunk/ompi/attribute/attribute.c    2009-05-30 11:54:29 EDT
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (Sat, 30 May 2009)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -294,7 +294,7 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      if (0 != (keyval_obj-&gt;attr_flag &amp; OMPI_KEYVAL_F77)) { \
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          MPI_Fint f_key = OMPI_INT_2_FINT(key); \
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          MPI_Fint f_err; \
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -        ompi_fortran_logical_t f_flag; \
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +        opal_fortran_logical_t f_flag; \
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          /* MPI-1 Fortran-style */ \
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          if (0 != (keyval_obj-&gt;attr_flag &amp; OMPI_KEYVAL_F77_MPI1)) { \
</span><br>
<span class="quotelev3">&gt;&gt;&gt;              MPI_Fint in, out;                                      \
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -486,9 +486,9 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      }
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      key_bitmap = OBJ_NEW(opal_bitmap_t);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      /*
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -     * Set the max size to OMPI_FORTRAN_HANDLE_MAX to enforce bound
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +     * Set the max size to OPAL_FORTRAN_HANDLE_MAX to enforce bound
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -    opal_bitmap_set_max_size (key_bitmap, OMPI_FORTRAN_HANDLE_MAX);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +    opal_bitmap_set_max_size (key_bitmap, OPAL_FORTRAN_HANDLE_MAX);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      if (0 != opal_bitmap_init(key_bitmap, 32)) {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          return MPI_ERR_SYSRESOURCE;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      }
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Modified: trunk/ompi/attribute/attribute.h
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ======================================================================
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --- trunk/ompi/attribute/attribute.h    (original)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +++ trunk/ompi/attribute/attribute.h    2009-05-30 11:54:29 EDT
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (Sat, 30 May 2009)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -67,7 +67,7 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                                      MPI_Fint
</span><br>
<span class="quotelev3">&gt;&gt;&gt; *extra_state,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                                      MPI_Fint
</span><br>
<span class="quotelev3">&gt;&gt;&gt; *attr_in,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                                      MPI_Fint
</span><br>
<span class="quotelev3">&gt;&gt;&gt; *attr_out,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ompi_fortran_logical_t *flag,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +                                                    MPI_Flogical
</span><br>
<span class="quotelev3">&gt;&gt;&gt; *flag,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                                      MPI_Fint *ierr);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  typedef void (ompi_mpi1_fortran_delete_attr_function)(MPI_Fint *obj,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                                        MPI_Fint
</span><br>
<span class="quotelev3">&gt;&gt;&gt; *keyval,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -84,7 +84,7 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                                      void
</span><br>
<span class="quotelev3">&gt;&gt;&gt; *extra_state,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                                      void *attr_in,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                                      void *attr_out,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ompi_fortran_logical_t *flag,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +                                                    MPI_Flogical
</span><br>
<span class="quotelev3">&gt;&gt;&gt; *flag,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                                      MPI_Fint *ierr);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  typedef void (ompi_mpi2_fortran_delete_attr_function)(MPI_Fint *obj,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                                        MPI_Fint
</span><br>
<span class="quotelev3">&gt;&gt;&gt; *keyval,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Modified: trunk/ompi/communicator/comm_init.c
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ======================================================================
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --- trunk/ompi/communicator/comm_init.c (original)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +++ trunk/ompi/communicator/comm_init.c 2009-05-30 11:54:29 EDT
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (Sat, 30 May 2009)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -70,7 +70,7 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      /* Setup communicator array */
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      OBJ_CONSTRUCT(&amp;ompi_mpi_communicators, opal_pointer_array_t);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      if( OPAL_SUCCESS !=
</span><br>
<span class="quotelev3">&gt;&gt;&gt; opal_pointer_array_init(&amp;ompi_mpi_communicators, 0,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OMPI_FORTRAN_HANDLE_MAX, 64) ) {
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OPAL_FORTRAN_HANDLE_MAX, 64) ) {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          return OMPI_ERROR;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      }
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Modified: trunk/ompi/datatype/copy_functions.c
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ======================================================================
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --- trunk/ompi/datatype/copy_functions.c        (original)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +++ trunk/ompi/datatype/copy_functions.c        2009-05-30 11:54:29
</span><br>
<span class="quotelev3">&gt;&gt;&gt; EDT (Sat, 30 May 2009)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -139,19 +139,19 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  COPY_TYPE( 2complex_float, ompi_complex_float_t, 2 )
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  COPY_TYPE( 2complex_double, ompi_complex_double_t, 2 )
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_SIZEOF_FORTRAN_LOGICAL == 1 || SIZEOF_BOOL == 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_SIZEOF_FORTRAN_LOGICAL == 1 || SIZEOF_BOOL == 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #define REQUIRE_COPY_BYTES_1 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #else
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #define REQUIRE_COPY_BYTES_1 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_SIZEOF_FORTRAN_LOGICAL == 2 || SIZEOF_BOOL == 2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_SIZEOF_FORTRAN_LOGICAL == 2 || SIZEOF_BOOL == 2
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #define REQUIRE_COPY_BYTES_2 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #else
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #define REQUIRE_COPY_BYTES_2 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_SIZEOF_FORTRAN_LOGICAL == 4 || SIZEOF_BOOL == 4
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_SIZEOF_FORTRAN_LOGICAL == 4 || SIZEOF_BOOL == 4
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #define REQUIRE_COPY_BYTES_4 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #else
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #define REQUIRE_COPY_BYTES_4 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -236,9 +236,9 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #else
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #error Complete me please
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_SIZEOF_FORTRAN_LOGICAL == 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_SIZEOF_FORTRAN_LOGICAL == 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     (conversion_fct_t)copy_bytes_1,              /*
</span><br>
<span class="quotelev3">&gt;&gt;&gt; DT_LOGIC               */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#elif OMPI_SIZEOF_FORTRAN_LOGICAL == 4
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#elif OPAL_SIZEOF_FORTRAN_LOGICAL == 4
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     (conversion_fct_t)copy_bytes_4,              /*
</span><br>
<span class="quotelev3">&gt;&gt;&gt; DT_LOGIC               */
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #elif 1 /* always, some compiler complain if there is not value */
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     NULL,                                        /*
</span><br>
<span class="quotelev3">&gt;&gt;&gt; DT_LOGIC               */
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Modified: trunk/ompi/datatype/copy_functions_heterogeneous.c
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ======================================================================
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --- trunk/ompi/datatype/copy_functions_heterogeneous.c  (original)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +++ trunk/ompi/datatype/copy_functions_heterogeneous.c  2009-05-30
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 11:54:29 EDT (Sat, 30 May 2009)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -269,8 +269,8 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #define
</span><br>
<span class="quotelev3">&gt;&gt;&gt; FORTRAN_LOGICAL_COPY_LOOP(TYPE)                                \
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      for( i = 0; i &lt; count; i++ )
</span><br>
<span class="quotelev3">&gt;&gt;&gt; {                                     \
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -        ompi_fortran_logical_t *to_real = (ompi_fortran_logical_t*)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; to; \
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -        *to_real = *((TYPE*) from) == 0 ? 0 :
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OMPI_FORTRAN_VALUE_TRUE; \
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +        opal_fortran_logical_t *to_real = (opal_fortran_logical_t*)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; to; \
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +        *to_real = *((TYPE*) from) == 0 ? 0 :
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OPAL_FORTRAN_VALUE_TRUE; \
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          to +=
</span><br>
<span class="quotelev3">&gt;&gt;&gt; to_extent;                                               \
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          from +=
</span><br>
<span class="quotelev3">&gt;&gt;&gt; from_extent;                                           \
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      }
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -298,13 +298,13 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          }
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      }
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -    datatype_check( &quot;logical&quot;, sizeof(ompi_fortran_logical_t),
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -                    sizeof(ompi_fortran_logical_t), &amp;count,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +    datatype_check( &quot;logical&quot;, sizeof(opal_fortran_logical_t),
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +                    sizeof(opal_fortran_logical_t), &amp;count,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                      from, from_len, from_extent,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                      to, to_length, to_extent);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -    if ((to_extent != sizeof(ompi_fortran_logical_t) ||
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -         from_extent != sizeof(ompi_fortran_logical_t)) ||
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +    if ((to_extent != sizeof(opal_fortran_logical_t) ||
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +         from_extent != sizeof(opal_fortran_logical_t)) ||
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          ((pConvertor-&gt;remoteArch &amp; OPAL_ARCH_LOGICALISxx) !=
</span><br>
<span class="quotelev3">&gt;&gt;&gt;           (ompi_mpi_local_arch &amp; OPAL_ARCH_LOGICALISxx))) {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          switch (pConvertor-&gt;remoteArch &amp; OPAL_ARCH_LOGICALISxx) {
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -319,7 +319,7 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt;              break;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          }
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      } else {
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -        MEMCPY( to, from, count * sizeof(ompi_fortran_logical_t) );
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +        MEMCPY( to, from, count * sizeof(opal_fortran_logical_t) );
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      }
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      *advance = count * from_extent;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Modified: trunk/ompi/datatype/dt_module.c
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ======================================================================
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --- trunk/ompi/datatype/dt_module.c     (original)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +++ trunk/ompi/datatype/dt_module.c     2009-05-30 11:54:29 EDT
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (Sat, 30 May 2009)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -118,25 +118,25 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  OMPI_DECLSPEC ompi_predefined_datatype_t ompi_mpi_long_long_int =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; { INIT_UNAVAILABLE_DATA( LONG_LONG_INT) };
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  OMPI_DECLSPEC ompi_predefined_datatype_t
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ompi_mpi_unsigned_long_long =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; { INIT_UNAVAILABLE_DATA( UNIGNED_LONG_LONG) };
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #endif  /* HAVE_LONG_LONG */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -OMPI_DECLSPEC ompi_predefined_datatype_t ompi_mpi_float =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; { INIT_BASIC_DATA( float, OMPI_ALIGNMENT_FLOAT, FLOAT,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; DT_FLAG_DATA_C | DT_FLAG_DATA_FLOAT) };
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -OMPI_DECLSPEC ompi_predefined_datatype_t ompi_mpi_double =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; { INIT_BASIC_DATA( double, OMPI_ALIGNMENT_DOUBLE, DOUBLE,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; DT_FLAG_DATA_C | DT_FLAG_DATA_FLOAT) };
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +OMPI_DECLSPEC ompi_predefined_datatype_t ompi_mpi_float =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; { INIT_BASIC_DATA( float, OPAL_ALIGNMENT_FLOAT, FLOAT,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; DT_FLAG_DATA_C | DT_FLAG_DATA_FLOAT) };
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +OMPI_DECLSPEC ompi_predefined_datatype_t ompi_mpi_double =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; { INIT_BASIC_DATA( double, OPAL_ALIGNMENT_DOUBLE, DOUBLE,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; DT_FLAG_DATA_C | DT_FLAG_DATA_FLOAT) };
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #if HAVE_LONG_DOUBLE
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  OMPI_DECLSPEC ompi_predefined_datatype_t ompi_mpi_long_double =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; { INIT_BASIC_DATA( long double, OPAL_ALIGNMENT_LONG_DOUBLE,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; LONG_DOUBLE, DT_FLAG_DATA_C | DT_FLAG_DATA_FLOAT) };
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #else
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  OMPI_DECLSPEC ompi_predefined_datatype_t ompi_mpi_long_double =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; { INIT_UNAVAILABLE_DATA( LONG_DOUBLE) };
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #endif  /* HAVE_LONG_DOUBLE */
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  OMPI_DECLSPEC ompi_predefined_datatype_t ompi_mpi_packed =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; { INIT_BASIC_DATA( char, OPAL_ALIGNMENT_CHAR, PACKED, 0) };
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_ALIGNMENT_WCHAR != 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -OMPI_DECLSPEC ompi_predefined_datatype_t ompi_mpi_wchar =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; { INIT_BASIC_DATA( wchar_t, OMPI_ALIGNMENT_WCHAR, WCHAR,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; DT_FLAG_DATA_C) };
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_ALIGNMENT_WCHAR != 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +OMPI_DECLSPEC ompi_predefined_datatype_t ompi_mpi_wchar =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; { INIT_BASIC_DATA( wchar_t, OPAL_ALIGNMENT_WCHAR, WCHAR,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; DT_FLAG_DATA_C) };
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #else
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  OMPI_DECLSPEC ompi_predefined_datatype_t ompi_mpi_wchar =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; { INIT_UNAVAILABLE_DATA( WCHAR) };
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#endif  /* OMPI_ALIGNMENT_WCHAR */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#endif  /* OPAL_ALIGNMENT_WCHAR */
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -OMPI_DECLSPEC ompi_predefined_datatype_t ompi_mpi_cxx_bool =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; { INIT_BASIC_DATA( bool, OMPI_ALIGNMENT_CXX_BOOL, CXX_BOOL,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; DT_FLAG_DATA_CPP) };
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -OMPI_DECLSPEC ompi_predefined_datatype_t ompi_mpi_logic =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; { INIT_BASIC_FORTRAN_TYPE( DT_LOGIC, LOGIC,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OMPI_SIZEOF_FORTRAN_LOGICAL, OMPI_ALIGNMENT_FORTRAN_LOGICAL, 0) };
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -OMPI_DECLSPEC ompi_predefined_datatype_t ompi_mpi_integer =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; { INIT_BASIC_FORTRAN_TYPE( DT_INTEGER, INTEGER,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OMPI_SIZEOF_FORTRAN_INTEGER, OMPI_ALIGNMENT_FORTRAN_INTEGER,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; DT_FLAG_DATA_INT) };
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -OMPI_DECLSPEC ompi_predefined_datatype_t ompi_mpi_real =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; { INIT_BASIC_FORTRAN_TYPE( DT_REAL, REAL, OMPI_SIZEOF_FORTRAN_REAL,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OMPI_ALIGNMENT_FORTRAN_REAL, DT_FLAG_DATA_FLOAT) };
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -OMPI_DECLSPEC ompi_predefined_datatype_t ompi_mpi_dblprec =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; { INIT_BASIC_FORTRAN_TYPE( DT_DBLPREC, DOUBLE_PRECISION,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OMPI_SIZEOF_FORTRAN_DOUBLE_PRECISION,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OMPI_ALIGNMENT_FORTRAN_DOUBLE_PRECISION, DT_FLAG_DATA_FLOAT) };
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +OMPI_DECLSPEC ompi_predefined_datatype_t ompi_mpi_cxx_bool =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; { INIT_BASIC_DATA( bool, OPAL_ALIGNMENT_CXX_BOOL, CXX_BOOL,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; DT_FLAG_DATA_CPP) };
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +OMPI_DECLSPEC ompi_predefined_datatype_t ompi_mpi_logic =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; { INIT_BASIC_FORTRAN_TYPE( DT_LOGIC, LOGIC,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OPAL_SIZEOF_FORTRAN_LOGICAL, OPAL_ALIGNMENT_FORTRAN_LOGICAL, 0) };
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +OMPI_DECLSPEC ompi_predefined_datatype_t ompi_mpi_integer =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; { INIT_BASIC_FORTRAN_TYPE( DT_INTEGER, INTEGER,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OPAL_SIZEOF_FORTRAN_INTEGER, OPAL_ALIGNMENT_FORTRAN_INTEGER,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; DT_FLAG_DATA_INT) };
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +OMPI_DECLSPEC ompi_predefined_datatype_t ompi_mpi_real =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; { INIT_BASIC_FORTRAN_TYPE( DT_REAL, REAL, OPAL_SIZEOF_FORTRAN_REAL,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OPAL_ALIGNMENT_FORTRAN_REAL, DT_FLAG_DATA_FLOAT) };
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +OMPI_DECLSPEC ompi_predefined_datatype_t ompi_mpi_dblprec =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; { INIT_BASIC_FORTRAN_TYPE( DT_DBLPREC, DOUBLE_PRECISION,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OPAL_SIZEOF_FORTRAN_DOUBLE_PRECISION,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OPAL_ALIGNMENT_FORTRAN_DOUBLE_PRECISION, DT_FLAG_DATA_FLOAT) };
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #if HAVE_LONG_DOUBLE
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  OMPI_DECLSPEC ompi_predefined_datatype_t ompi_mpi_ldblcplex =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; { INIT_BASIC_DATA( ompi_complex_long_double_t,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OPAL_ALIGNMENT_LONG_DOUBLE, COMPLEX_LONG_DOUBLE,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; DT_FLAG_DATA_FORTRAN | DT_FLAG_DATA_COMPLEX) };
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -144,8 +144,8 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  OMPI_DECLSPEC ompi_predefined_datatype_t ompi_mpi_ldblcplex =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; { INIT_UNAVAILABLE_DATA( COMPLEX_LONG_DOUBLE) };
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #endif  /* HAVE_LONG_DOUBLE */
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -OMPI_DECLSPEC ompi_predefined_datatype_t ompi_mpi_cplex =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; { INIT_BASIC_DATA( ompi_complex_float_t, OMPI_ALIGNMENT_FLOAT,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; COMPLEX_FLOAT, DT_FLAG_DATA_FORTRAN | DT_FLAG_DATA_COMPLEX) };
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -OMPI_DECLSPEC ompi_predefined_datatype_t ompi_mpi_dblcplex =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; { INIT_BASIC_DATA( ompi_complex_double_t, OMPI_ALIGNMENT_DOUBLE,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; COMPLEX_DOUBLE, DT_FLAG_DATA_FORTRAN | DT_FLAG_DATA_COMPLEX) };
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +OMPI_DECLSPEC ompi_predefined_datatype_t ompi_mpi_cplex =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; { INIT_BASIC_DATA( ompi_complex_float_t, OPAL_ALIGNMENT_FLOAT,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; COMPLEX_FLOAT, DT_FLAG_DATA_FORTRAN | DT_FLAG_DATA_COMPLEX) };
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +OMPI_DECLSPEC ompi_predefined_datatype_t ompi_mpi_dblcplex =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; { INIT_BASIC_DATA( ompi_complex_double_t, OPAL_ALIGNMENT_DOUBLE,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; COMPLEX_DOUBLE, DT_FLAG_DATA_FORTRAN | DT_FLAG_DATA_COMPLEX) };
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  OMPI_DECLSPEC ompi_predefined_datatype_t ompi_mpi_float_int =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; { INIT_BASIC_TYPE( DT_FLOAT_INT, FLOAT_INT) };
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  OMPI_DECLSPEC ompi_predefined_datatype_t ompi_mpi_double_int =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; { INIT_BASIC_TYPE( DT_DOUBLE_INT, DOUBLE_INT) };
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #if HAVE_LONG_DOUBLE
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -161,8 +161,8 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  OMPI_DECLSPEC ompi_predefined_datatype_t ompi_mpi_2dblprec =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; { INIT_BASIC_TYPE( DT_2DBLPREC, 2DBLPREC) };
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  OMPI_DECLSPEC ompi_predefined_datatype_t ompi_mpi_2integer =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; { INIT_BASIC_TYPE( DT_2INTEGER, 2INTEGER) };
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -OMPI_DECLSPEC ompi_predefined_datatype_t ompi_mpi_cxx_cplex =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; { INIT_BASIC_DATA( ompi_complex_float_t, OMPI_ALIGNMENT_FLOAT,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; COMPLEX_FLOAT, DT_FLAG_DATA_CPP | DT_FLAG_DATA_COMPLEX) };
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -OMPI_DECLSPEC ompi_predefined_datatype_t ompi_mpi_cxx_dblcplex =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; { INIT_BASIC_DATA( ompi_complex_double_t, OMPI_ALIGNMENT_DOUBLE,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; COMPLEX_DOUBLE, DT_FLAG_DATA_CPP | DT_FLAG_DATA_COMPLEX) };
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +OMPI_DECLSPEC ompi_predefined_datatype_t ompi_mpi_cxx_cplex =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; { INIT_BASIC_DATA( ompi_complex_float_t, OPAL_ALIGNMENT_FLOAT,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; COMPLEX_FLOAT, DT_FLAG_DATA_CPP | DT_FLAG_DATA_COMPLEX) };
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +OMPI_DECLSPEC ompi_predefined_datatype_t ompi_mpi_cxx_dblcplex =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; { INIT_BASIC_DATA( ompi_complex_double_t, OPAL_ALIGNMENT_DOUBLE,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; COMPLEX_DOUBLE, DT_FLAG_DATA_CPP | DT_FLAG_DATA_COMPLEX) };
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #if HAVE_LONG_DOUBLE
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  OMPI_DECLSPEC ompi_predefined_datatype_t ompi_mpi_cxx_ldblcplex =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; { INIT_BASIC_DATA( ompi_complex_long_double_t,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OPAL_ALIGNMENT_LONG_DOUBLE, COMPLEX_LONG_DOUBLE, DT_FLAG_DATA_CPP |
</span><br>
<span class="quotelev3">&gt;&gt;&gt; DT_FLAG_DATA_COMPLEX) };
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #else
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -173,86 +173,86 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  OMPI_DECLSPEC ompi_predefined_datatype_t ompi_mpi_2dblcplex =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; { INIT_BASIC_TYPE( DT_2DOUBLE_COMPLEX, 2DOUBLE_COMPLEX) };
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  OMPI_DECLSPEC ompi_predefined_datatype_t ompi_mpi_unavailable =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; { INIT_UNAVAILABLE_DATA( UNAVAILABLE) };
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_HAVE_FORTRAN_LOGICAL1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -OMPI_DECLSPEC ompi_predefined_datatype_t ompi_mpi_logical1 =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; { INIT_BASIC_FORTRAN_TYPE( DT_LOGIC, LOGICAL1,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OMPI_SIZEOF_FORTRAN_LOGICAL1, OMPI_ALIGNMENT_FORTRAN_LOGICAL1, 0) };
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_HAVE_FORTRAN_LOGICAL1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +OMPI_DECLSPEC ompi_predefined_datatype_t ompi_mpi_logical1 =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; { INIT_BASIC_FORTRAN_TYPE( DT_LOGIC, LOGICAL1,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OPAL_SIZEOF_FORTRAN_LOGICAL1, OPAL_ALIGNMENT_FORTRAN_LOGICAL1, 0) };
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #else
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  OMPI_DECLSPEC ompi_predefined_datatype_t ompi_mpi_logical1 =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; { INIT_UNAVAILABLE_DATA( LOGICAL1) };
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#endif  /* OMPI_HAVE_FORTRAN_LOGICAL1 */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_HAVE_FORTRAN_LOGICAL2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -OMPI_DECLSPEC ompi_predefined_datatype_t ompi_mpi_logical2 =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; { INIT_BASIC_FORTRAN_TYPE( DT_LOGIC, LOGICAL2,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OMPI_SIZEOF_FORTRAN_LOGICAL2, OMPI_ALIGNMENT_FORTRAN_LOGICAL2, 0) };
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#endif  /* OPAL_HAVE_FORTRAN_LOGICAL1 */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_HAVE_FORTRAN_LOGICAL2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +OMPI_DECLSPEC ompi_predefined_datatype_t ompi_mpi_logical2 =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; { INIT_BASIC_FORTRAN_TYPE( DT_LOGIC, LOGICAL2,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OPAL_SIZEOF_FORTRAN_LOGICAL2, OPAL_ALIGNMENT_FORTRAN_LOGICAL2, 0) };
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #else
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  OMPI_DECLSPEC ompi_predefined_datatype_t ompi_mpi_logical2 =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; { INIT_UNAVAILABLE_DATA( LOGICAL2) };
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#endif  /* OMPI_HAVE_FORTRAN_LOGICAL2 */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_HAVE_FORTRAN_LOGICAL4
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -OMPI_DECLSPEC ompi_predefined_datatype_t ompi_mpi_logical4 =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; { INIT_BASIC_FORTRAN_TYPE( DT_LOGIC, LOGICAL4,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OMPI_SIZEOF_FORTRAN_LOGICAL4, OMPI_ALIGNMENT_FORTRAN_LOGICAL4, 0) };
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#endif  /* OPAL_HAVE_FORTRAN_LOGICAL2 */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_HAVE_FORTRAN_LOGICAL4
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +OMPI_DECLSPEC ompi_predefined_datatype_t ompi_mpi_logical4 =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; { INIT_BASIC_FORTRAN_TYPE( DT_LOGIC, LOGICAL4,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OPAL_SIZEOF_FORTRAN_LOGICAL4, OPAL_ALIGNMENT_FORTRAN_LOGICAL4, 0) };
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #else
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  OMPI_DECLSPEC ompi_predefined_datatype_t ompi_mpi_logical4 =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; { INIT_UNAVAILABLE_DATA( LOGICAL4) };
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#endif  /* OMPI_HAVE_FORTRAN_LOGICAL4 */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_HAVE_FORTRAN_LOGICAL8
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -OMPI_DECLSPEC ompi_predefined_datatype_t ompi_mpi_logical8 =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; { INIT_BASIC_FORTRAN_TYPE( DT_LOGIC, LOGICAL8,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OMPI_SIZEOF_FORTRAN_LOGICAL8, OMPI_ALIGNMENT_FORTRAN_LOGICAL8, 0) };
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#endif  /* OPAL_HAVE_FORTRAN_LOGICAL4 */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_HAVE_FORTRAN_LOGICAL8
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +OMPI_DECLSPEC ompi_predefined_datatype_t ompi_mpi_logical8 =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; { INIT_BASIC_FORTRAN_TYPE( DT_LOGIC, LOGICAL8,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OPAL_SIZEOF_FORTRAN_LOGICAL8, OPAL_ALIGNMENT_FORTRAN_LOGICAL8, 0) };
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #else
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  OMPI_DECLSPEC ompi_predefined_datatype_t ompi_mpi_logical8 =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; { INIT_UNAVAILABLE_DATA( LOGICAL8) };
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#endif  /* OMPI_HAVE_FORTRAN_LOGICAL8 */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#endif  /* OPAL_HAVE_FORTRAN_LOGICAL8 */
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_HAVE_FORTRAN_REAL2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -OMPI_DECLSPEC ompi_predefined_datatype_t ompi_mpi_real2 =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; { INIT_BASIC_FORTRAN_TYPE( DT_FLOAT, REAL2,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OMPI_SIZEOF_FORTRAN_REAL2, OMPI_ALIGNMENT_FORTRAN_REAL2,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; DT_FLAG_DATA_FLOAT) };
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_HAVE_FORTRAN_REAL2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +OMPI_DECLSPEC ompi_predefined_datatype_t ompi_mpi_real2 =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; { INIT_BASIC_FORTRAN_TYPE( DT_FLOAT, REAL2,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OPAL_SIZEOF_FORTRAN_REAL2, OPAL_ALIGNMENT_FORTRAN_REAL2,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; DT_FLAG_DATA_FLOAT) };
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #else
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  OMPI_DECLSPEC ompi_predefined_datatype_t ompi_mpi_real2 =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; { INIT_UNAVAILABLE_DATA( REAL2) };
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_HAVE_FORTRAN_REAL4
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -OMPI_DECLSPEC ompi_predefined_datatype_t ompi_mpi_real4 =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; { INIT_BASIC_FORTRAN_TYPE( DT_FLOAT, REAL4,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OMPI_SIZEOF_FORTRAN_REAL4, OMPI_ALIGNMENT_FORTRAN_REAL4,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; DT_FLAG_DATA_FLOAT) };
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_HAVE_FORTRAN_REAL4
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +OMPI_DECLSPEC ompi_predefined_datatype_t ompi_mpi_real4 =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; { INIT_BASIC_FORTRAN_TYPE( DT_FLOAT, REAL4,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OPAL_SIZEOF_FORTRAN_REAL4, OPAL_ALIGNMENT_FORTRAN_REAL4,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; DT_FLAG_DATA_FLOAT) };
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #else
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  OMPI_DECLSPEC ompi_predefined_datatype_t ompi_mpi_real4 =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; { INIT_UNAVAILABLE_DATA( REAL4) };
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_HAVE_FORTRAN_REAL8
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -OMPI_DECLSPEC ompi_predefined_datatype_t ompi_mpi_real8 =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; { INIT_BASIC_FORTRAN_TYPE( DT_DOUBLE, REAL8,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OMPI_SIZEOF_FORTRAN_REAL8, OMPI_ALIGNMENT_FORTRAN_REAL8,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; DT_FLAG_DATA_FLOAT) };
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_HAVE_FORTRAN_REAL8
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +OMPI_DECLSPEC ompi_predefined_datatype_t ompi_mpi_real8 =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; { INIT_BASIC_FORTRAN_TYPE( DT_DOUBLE, REAL8,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OPAL_SIZEOF_FORTRAN_REAL8, OPAL_ALIGNMENT_FORTRAN_REAL8,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; DT_FLAG_DATA_FLOAT) };
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #else
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  OMPI_DECLSPEC ompi_predefined_datatype_t ompi_mpi_real8 =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; { INIT_UNAVAILABLE_DATA( REAL8) };
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_HAVE_FORTRAN_REAL16 &amp;&amp; OMPI_REAL16_MATCHES_C
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -OMPI_DECLSPEC ompi_predefined_datatype_t ompi_mpi_real16 =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; { INIT_BASIC_FORTRAN_TYPE( DT_LONG_DOUBLE, REAL16,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OMPI_SIZEOF_FORTRAN_REAL16, OMPI_ALIGNMENT_FORTRAN_REAL16,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; DT_FLAG_DATA_FLOAT) };
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_HAVE_FORTRAN_REAL16 &amp;&amp; OPAL_REAL16_MATCHES_C
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +OMPI_DECLSPEC ompi_predefined_datatype_t ompi_mpi_real16 =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; { INIT_BASIC_FORTRAN_TYPE( DT_LONG_DOUBLE, REAL16,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OPAL_SIZEOF_FORTRAN_REAL16, OPAL_ALIGNMENT_FORTRAN_REAL16,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; DT_FLAG_DATA_FLOAT) };
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #else
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  OMPI_DECLSPEC ompi_predefined_datatype_t ompi_mpi_real16 =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; { INIT_UNAVAILABLE_DATA( REAL16) };
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_HAVE_FORTRAN_INTEGER1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -OMPI_DECLSPEC ompi_predefined_datatype_t ompi_mpi_integer1 =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; { INIT_BASIC_FORTRAN_TYPE( DT_CHAR, INTEGER1,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OMPI_SIZEOF_FORTRAN_INTEGER1, OMPI_ALIGNMENT_FORTRAN_INTEGER1,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; DT_FLAG_DATA_INT) };
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_HAVE_FORTRAN_INTEGER1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +OMPI_DECLSPEC ompi_predefined_datatype_t ompi_mpi_integer1 =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; { INIT_BASIC_FORTRAN_TYPE( DT_CHAR, INTEGER1,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OPAL_SIZEOF_FORTRAN_INTEGER1, OPAL_ALIGNMENT_FORTRAN_INTEGER1,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; DT_FLAG_DATA_INT) };
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #else
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  OMPI_DECLSPEC ompi_predefined_datatype_t ompi_mpi_integer1 =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; { INIT_UNAVAILABLE_DATA( INTEGER1) };
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_HAVE_FORTRAN_INTEGER2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -OMPI_DECLSPEC ompi_predefined_datatype_t ompi_mpi_integer2 =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; { INIT_BASIC_FORTRAN_TYPE( DT_SHORT, INTEGER2,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OMPI_SIZEOF_FORTRAN_INTEGER2, OMPI_ALIGNMENT_FORTRAN_INTEGER2,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; DT_FLAG_DATA_INT) };
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_HAVE_FORTRAN_INTEGER2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +OMPI_DECLSPEC ompi_predefined_datatype_t ompi_mpi_integer2 =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; { INIT_BASIC_FORTRAN_TYPE( DT_SHORT, INTEGER2,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OPAL_SIZEOF_FORTRAN_INTEGER2, OPAL_ALIGNMENT_FORTRAN_INTEGER2,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; DT_FLAG_DATA_INT) };
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #else
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  OMPI_DECLSPEC ompi_predefined_datatype_t ompi_mpi_integer2 =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; { INIT_UNAVAILABLE_DATA( INTEGER2) };
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_HAVE_FORTRAN_INTEGER4
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -OMPI_DECLSPEC ompi_predefined_datatype_t ompi_mpi_integer4 =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; { INIT_BASIC_FORTRAN_TYPE( DT_INT, INTEGER4,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OMPI_SIZEOF_FORTRAN_INTEGER4, OMPI_ALIGNMENT_FORTRAN_INTEGER4,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; DT_FLAG_DATA_INT) };
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_HAVE_FORTRAN_INTEGER4
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +OMPI_DECLSPEC ompi_predefined_datatype_t ompi_mpi_integer4 =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; { INIT_BASIC_FORTRAN_TYPE( DT_INT, INTEGER4,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OPAL_SIZEOF_FORTRAN_INTEGER4, OPAL_ALIGNMENT_FORTRAN_INTEGER4,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; DT_FLAG_DATA_INT) };
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #else
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  OMPI_DECLSPEC ompi_predefined_datatype_t ompi_mpi_integer4 =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; { INIT_UNAVAILABLE_DATA( INTEGER4) };
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_HAVE_FORTRAN_INTEGER8
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -OMPI_DECLSPEC ompi_predefined_datatype_t ompi_mpi_integer8 =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; { INIT_BASIC_FORTRAN_TYPE( DT_LONG_LONG_INT, INTEGER8,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OMPI_SIZEOF_FORTRAN_INTEGER8, OMPI_ALIGNMENT_FORTRAN_INTEGER8,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; DT_FLAG_DATA_INT) };
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_HAVE_FORTRAN_INTEGER8
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +OMPI_DECLSPEC ompi_predefined_datatype_t ompi_mpi_integer8 =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; { INIT_BASIC_FORTRAN_TYPE( DT_LONG_LONG_INT, INTEGER8,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OPAL_SIZEOF_FORTRAN_INTEGER8, OPAL_ALIGNMENT_FORTRAN_INTEGER8,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; DT_FLAG_DATA_INT) };
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #else
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  OMPI_DECLSPEC ompi_predefined_datatype_t ompi_mpi_integer8 =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; { INIT_UNAVAILABLE_DATA( INTEGER8) };
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_HAVE_FORTRAN_INTEGER16
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -OMPI_DECLSPEC ompi_predefined_datatype_t ompi_mpi_integer16 =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; { INIT_BASIC_FORTRAN_TYPE( DT_LONG_LONG_INT, INTEGER16,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OMPI_SIZEOF_FORTRAN_INTEGER16, OMPI_ALIGNMENT_FORTRAN_INTEGER16,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; DT_FLAG_DATA_INT) };
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_HAVE_FORTRAN_INTEGER16
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +OMPI_DECLSPEC ompi_predefined_datatype_t ompi_mpi_integer16 =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; { INIT_BASIC_FORTRAN_TYPE( DT_LONG_LONG_INT, INTEGER16,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OPAL_SIZEOF_FORTRAN_INTEGER16, OPAL_ALIGNMENT_FORTRAN_INTEGER16,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; DT_FLAG_DATA_INT) };
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #else
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  OMPI_DECLSPEC ompi_predefined_datatype_t ompi_mpi_integer16 =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; { INIT_UNAVAILABLE_DATA( INTEGER16) };
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_HAVE_FORTRAN_REAL4 &amp;&amp; OMPI_HAVE_FORTRAN_COMPLEX8
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -OMPI_DECLSPEC ompi_predefined_datatype_t ompi_mpi_complex8 =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; { INIT_BASIC_FORTRAN_TYPE( DT_COMPLEX_FLOAT, COMPLEX8,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OMPI_SIZEOF_FORTRAN_COMPLEX, OMPI_ALIGNMENT_FORTRAN_REAL,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; DT_FLAG_DATA_COMPLEX) };
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_HAVE_FORTRAN_REAL4 &amp;&amp; OPAL_HAVE_FORTRAN_COMPLEX8
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +OMPI_DECLSPEC ompi_predefined_datatype_t ompi_mpi_complex8 =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; { INIT_BASIC_FORTRAN_TYPE( DT_COMPLEX_FLOAT, COMPLEX8,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OPAL_SIZEOF_FORTRAN_COMPLEX, OPAL_ALIGNMENT_FORTRAN_REAL,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; DT_FLAG_DATA_COMPLEX) };
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #else
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  OMPI_DECLSPEC ompi_predefined_datatype_t ompi_mpi_complex8 =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; { INIT_UNAVAILABLE_DATA( COMPLEX8) };
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_HAVE_FORTRAN_REAL8 &amp;&amp; OMPI_HAVE_FORTRAN_COMPLEX16
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -OMPI_DECLSPEC ompi_predefined_datatype_t ompi_mpi_complex16 =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; { INIT_BASIC_FORTRAN_TYPE( DT_COMPLEX_DOUBLE, COMPLEX16,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OMPI_SIZEOF_FORTRAN_COMPLEX16, OMPI_ALIGNMENT_FORTRAN_COMPLEX16,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; DT_FLAG_DATA_COMPLEX) };
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_HAVE_FORTRAN_REAL8 &amp;&amp; OPAL_HAVE_FORTRAN_COMPLEX16
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +OMPI_DECLSPEC ompi_predefined_datatype_t ompi_mpi_complex16 =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; { INIT_BASIC_FORTRAN_TYPE( DT_COMPLEX_DOUBLE, COMPLEX16,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OPAL_SIZEOF_FORTRAN_COMPLEX16, OPAL_ALIGNMENT_FORTRAN_COMPLEX16,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; DT_FLAG_DATA_COMPLEX) };
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #else
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  OMPI_DECLSPEC ompi_predefined_datatype_t ompi_mpi_complex16 =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; { INIT_UNAVAILABLE_DATA( COMPLEX16) };
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_HAVE_FORTRAN_REAL16 &amp;&amp; OMPI_HAVE_FORTRAN_COMPLEX32 &amp;&amp;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OMPI_REAL16_MATCHES_C
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -OMPI_DECLSPEC ompi_predefined_datatype_t ompi_mpi_complex32 =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; { INIT_BASIC_FORTRAN_TYPE( DT_COMPLEX_LONG_DOUBLE, COMPLEX32,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OMPI_SIZEOF_FORTRAN_COMPLEX32, OMPI_ALIGNMENT_FORTRAN_COMPLEX32,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; DT_FLAG_DATA_COMPLEX) };
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_HAVE_FORTRAN_REAL16 &amp;&amp; OPAL_HAVE_FORTRAN_COMPLEX32 &amp;&amp;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OPAL_REAL16_MATCHES_C
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +OMPI_DECLSPEC ompi_predefined_datatype_t ompi_mpi_complex32 =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; { INIT_BASIC_FORTRAN_TYPE( DT_COMPLEX_LONG_DOUBLE, COMPLEX32,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OPAL_SIZEOF_FORTRAN_COMPLEX32, OPAL_ALIGNMENT_FORTRAN_COMPLEX32,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; DT_FLAG_DATA_COMPLEX) };
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #else
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  OMPI_DECLSPEC ompi_predefined_datatype_t ompi_mpi_complex32 =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; { INIT_UNAVAILABLE_DATA( COMPLEX32) };
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -455,7 +455,7 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      /* Create the f2c translation table */
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      OBJ_CONSTRUCT(&amp;ompi_datatype_f_to_c_table, opal_pointer_array_t);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      if( OPAL_SUCCESS !=
</span><br>
<span class="quotelev3">&gt;&gt;&gt; opal_pointer_array_init(&amp;ompi_datatype_f_to_c_table,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -                                                0,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OMPI_FORTRAN_HANDLE_MAX, 64)) {
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +                                                0,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OPAL_FORTRAN_HANDLE_MAX, 64)) {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          return OMPI_ERROR;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      }
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      /* All temporary datatypes created on the following statement
</span><br>
<span class="quotelev3">&gt;&gt;&gt; will get registered
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -520,197 +520,197 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #endif  /* HAVE_LONG_DOUBLE */
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      /* Optional Fortran LOGICAL types */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_HAVE_FORTRAN_LOGICAL1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if (OMPI_SIZEOF_FORTRAN_LOGICAL1 == SIZEOF_CHAR)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_HAVE_FORTRAN_LOGICAL1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if (OPAL_SIZEOF_FORTRAN_LOGICAL1 == SIZEOF_CHAR)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      DECLARE_MPI_SYNONYM_DDT( &amp;ompi_mpi_logical1.dt, &quot;MPI_LOGICAL1&quot;,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &amp;ompi_mpi_char.dt );
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#elif (OMPI_SIZEOF_FORTRAN_LOGICAL1 == SIZEOF_SHORT)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#elif (OPAL_SIZEOF_FORTRAN_LOGICAL1 == SIZEOF_SHORT)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      DECLARE_MPI_SYNONYM_DDT( &amp;ompi_mpi_logical1.dt, &quot;MPI_LOGICAL1&quot;,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &amp;ompi_mpi_short.dt );
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#elif (OMPI_SIZEOF_FORTRAN_LOGICAL1 == SIZEOF_INT)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#elif (OPAL_SIZEOF_FORTRAN_LOGICAL1 == SIZEOF_INT)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      DECLARE_MPI_SYNONYM_DDT( &amp;ompi_mpi_logical1.dt, &quot;MPI_LOGICAL1&quot;,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &amp;ompi_mpi_int.dt );
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #else
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #   warning &quot;No proper C type found for LOGICAL1&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      DECLARE_MPI_SYNONYM_DDT( &amp;ompi_mpi_logical1.dt, &quot;MPI_LOGICAL1&quot;,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &amp;ompi_mpi_unavailable.dt );
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      ompi_mpi_logical1.dt.flags |= DT_FLAG_DATA_FORTRAN;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#endif /* OMPI_HAVE_FORTRAN_LOGICAL1 */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#endif /* OPAL_HAVE_FORTRAN_LOGICAL1 */
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_HAVE_FORTRAN_LOGICAL2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if (OMPI_SIZEOF_FORTRAN_LOGICAL2 == SIZEOF_SHORT)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_HAVE_FORTRAN_LOGICAL2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if (OPAL_SIZEOF_FORTRAN_LOGICAL2 == SIZEOF_SHORT)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      DECLARE_MPI_SYNONYM_DDT( &amp;ompi_mpi_logical2.dt, &quot;MPI_LOGICAL2&quot;,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &amp;ompi_mpi_short.dt );
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#elif (OMPI_SIZEOF_FORTRAN_LOGICAL2 == SIZEOF_INT)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#elif (OPAL_SIZEOF_FORTRAN_LOGICAL2 == SIZEOF_INT)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      DECLARE_MPI_SYNONYM_DDT( &amp;ompi_mpi_logical2.dt, &quot;MPI_LOGICAL2&quot;,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &amp;ompi_mpi_int.dt );
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #else
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #   warning &quot;No proper C type found for LOGICAL2&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      DECLARE_MPI_SYNONYM_DDT( &amp;ompi_mpi_logical2.dt, &quot;MPI_LOGICAL2&quot;,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &amp;ompi_mpi_unavailable.dt );
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      ompi_mpi_logical2.dt.flags |= DT_FLAG_DATA_FORTRAN;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#endif /* OMPI_HAVE_FORTRAN_LOGICAL2 */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#endif /* OPAL_HAVE_FORTRAN_LOGICAL2 */
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_HAVE_FORTRAN_LOGICAL4
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if (OMPI_SIZEOF_FORTRAN_LOGICAL4 == SIZEOF_INT)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_HAVE_FORTRAN_LOGICAL4
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if (OPAL_SIZEOF_FORTRAN_LOGICAL4 == SIZEOF_INT)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      DECLARE_MPI_SYNONYM_DDT( &amp;ompi_mpi_logical4.dt, &quot;MPI_LOGICAL4&quot;,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &amp;ompi_mpi_int.dt );
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#elif (OMPI_SIZEOF_FORTRAN_LOGICAL4 == SIZEOF_LONG)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#elif (OPAL_SIZEOF_FORTRAN_LOGICAL4 == SIZEOF_LONG)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      DECLARE_MPI_SYNONYM_DDT( &amp;ompi_mpi_logical4.dt, &quot;MPI_LOGICAL4&quot;,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &amp;ompi_mpi_long.dt );
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #else
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #   warning &quot;No proper C type found for LOGICAL4&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      DECLARE_MPI_SYNONYM_DDT( &amp;ompi_mpi_logical4.dt, &quot;MPI_LOGICAL4&quot;,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &amp;ompi_mpi_unavailable.dt );
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      ompi_mpi_logical4.dt.flags |= DT_FLAG_DATA_FORTRAN;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#endif /* OMPI_HAVE_FORTRAN_LOGICAL4 */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#endif /* OPAL_HAVE_FORTRAN_LOGICAL4 */
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_HAVE_FORTRAN_LOGICAL8
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if (OMPI_SIZEOF_FORTRAN_LOGICAL8 == SIZEOF_LONG)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_HAVE_FORTRAN_LOGICAL8
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if (OPAL_SIZEOF_FORTRAN_LOGICAL8 == SIZEOF_LONG)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      DECLARE_MPI_SYNONYM_DDT( &amp;ompi_mpi_logical8.dt, &quot;MPI_LOGICAL8&quot;,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &amp;ompi_mpi_long.dt );
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#elif (OMPI_SIZEOF_FORTRAN_LOGICAL8 == SIZEOF_LONG_LONG)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#elif (OPAL_SIZEOF_FORTRAN_LOGICAL8 == SIZEOF_LONG_LONG)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      DECLARE_MPI_SYNONYM_DDT( &amp;ompi_mpi_logical8.dt, &quot;MPI_LOGICAL8&quot;,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &amp;ompi_mpi_long_long_int.dt );
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #else
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #   warning &quot;No proper C type found for LOGICAL8&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      DECLARE_MPI_SYNONYM_DDT( &amp;ompi_mpi_logical8.dt, &quot;MPI_LOGICAL8&quot;,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &amp;ompi_mpi_unavailable.dt );
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      ompi_mpi_logical8.dt.flags |= DT_FLAG_DATA_FORTRAN |
</span><br>
<span class="quotelev3">&gt;&gt;&gt; DT_FLAG_DATA_INT;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#endif /* OMPI_HAVE_FORTRAN_INTEGER8 */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#endif /* OPAL_HAVE_FORTRAN_INTEGER8 */
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      /* Optional Fortran REAL types */
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_HAVE_FORTRAN_REAL2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if (OMPI_SIZEOF_FORTRAN_REAL2 == SIZEOF_FLOAT)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_HAVE_FORTRAN_REAL2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if (OPAL_SIZEOF_FORTRAN_REAL2 == SIZEOF_FLOAT)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      DECLARE_MPI_SYNONYM_DDT( &amp;ompi_mpi_real2.dt, &quot;MPI_REAL2&quot;,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &amp;ompi_mpi_float.dt );
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #else
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #   warning &quot;No proper C type found for REAL2&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      DECLARE_MPI_SYNONYM_DDT( &amp;ompi_mpi_real2.dt, &quot;MPI_REAL2&quot;,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &amp;ompi_mpi_unavailable.dt );
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      ompi_mpi_real2.dt.flags |= DT_FLAG_DATA_FORTRAN |
</span><br>
<span class="quotelev3">&gt;&gt;&gt; DT_FLAG_DATA_FLOAT;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#endif /* OMPI_HAVE_FORTRAN_REAL2 */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#endif /* OPAL_HAVE_FORTRAN_REAL2 */
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_HAVE_FORTRAN_REAL4
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if (OMPI_SIZEOF_FORTRAN_REAL4 == SIZEOF_FLOAT)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_HAVE_FORTRAN_REAL4
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if (OPAL_SIZEOF_FORTRAN_REAL4 == SIZEOF_FLOAT)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      DECLARE_MPI_SYNONYM_DDT( &amp;ompi_mpi_real4.dt, &quot;MPI_REAL4&quot;,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &amp;ompi_mpi_float.dt );
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #else
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #   warning &quot;No proper C type found for REAL4&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      DECLARE_MPI_SYNONYM_DDT( &amp;ompi_mpi_real4.dt, &quot;MPI_REAL4&quot;,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &amp;ompi_mpi_unavailable.dt );
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      ompi_mpi_real4.dt.flags |= DT_FLAG_DATA_FORTRAN |
</span><br>
<span class="quotelev3">&gt;&gt;&gt; DT_FLAG_DATA_FLOAT;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#endif /* OMPI_HAVE_FORTRAN_REAL4 */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#endif /* OPAL_HAVE_FORTRAN_REAL4 */
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_HAVE_FORTRAN_REAL8
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if (OMPI_SIZEOF_FORTRAN_REAL8 == SIZEOF_FLOAT)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_HAVE_FORTRAN_REAL8
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if (OPAL_SIZEOF_FORTRAN_REAL8 == SIZEOF_FLOAT)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      DECLARE_MPI_SYNONYM_DDT( &amp;ompi_mpi_real8.dt, &quot;MPI_REAL8&quot;,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &amp;ompi_mpi_float.dt );
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#elif (OMPI_SIZEOF_FORTRAN_REAL8 == SIZEOF_DOUBLE)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#elif (OPAL_SIZEOF_FORTRAN_REAL8 == SIZEOF_DOUBLE)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      DECLARE_MPI_SYNONYM_DDT( &amp;ompi_mpi_real8.dt, &quot;MPI_REAL8&quot;,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &amp;ompi_mpi_double.dt );
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#elif (OMPI_SIZEOF_FORTRAN_REAL8 == SIZEOF_LONG_DOUBLE)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#elif (OPAL_SIZEOF_FORTRAN_REAL8 == SIZEOF_LONG_DOUBLE)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      DECLARE_MPI_SYNONYM_DDT( &amp;ompi_mpi_real8.dt, &quot;MPI_REAL8&quot;,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &amp;ompi_mpi_long_double.dt );
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #else
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #   warning &quot;No proper C type found for REAL8&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      DECLARE_MPI_SYNONYM_DDT( &amp;ompi_mpi_real8.dt, &quot;MPI_REAL8&quot;,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &amp;ompi_mpi_unavailable.dt );
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      ompi_mpi_real8.dt.flags |= DT_FLAG_DATA_FORTRAN |
</span><br>
<span class="quotelev3">&gt;&gt;&gt; DT_FLAG_DATA_FLOAT;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#endif /* OMPI_HAVE_FORTRAN_REAL8 */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#endif /* OPAL_HAVE_FORTRAN_REAL8 */
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_HAVE_FORTRAN_REAL16
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if (OMPI_SIZEOF_FORTRAN_REAL16 == SIZEOF_LONG_DOUBLE)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_HAVE_FORTRAN_REAL16
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if (OPAL_SIZEOF_FORTRAN_REAL16 == SIZEOF_LONG_DOUBLE)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      DECLARE_MPI_SYNONYM_DDT( &amp;ompi_mpi_real16.dt, &quot;MPI_REAL16&quot;,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &amp;ompi_mpi_long_double.dt );
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #else
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #   warning &quot;No proper C type found for REAL16&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      DECLARE_MPI_SYNONYM_DDT( &amp;ompi_mpi_real16.dt, &quot;MPI_REAL16&quot;,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &amp;ompi_mpi_unavailable.dt );
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      ompi_mpi_real16.dt.flags |= DT_FLAG_DATA_FORTRAN |
</span><br>
<span class="quotelev3">&gt;&gt;&gt; DT_FLAG_DATA_FLOAT;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#endif /* OMPI_HAVE_FORTRAN_REAL16 */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#endif /* OPAL_HAVE_FORTRAN_REAL16 */
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      /* Optional Fortran INTEGER types */
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_HAVE_FORTRAN_INTEGER1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if (OMPI_SIZEOF_FORTRAN_INTEGER1 == SIZEOF_CHAR)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_HAVE_FORTRAN_INTEGER1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if (OPAL_SIZEOF_FORTRAN_INTEGER1 == SIZEOF_CHAR)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      DECLARE_MPI_SYNONYM_DDT( &amp;ompi_mpi_integer1.dt, &quot;MPI_INTEGER1&quot;,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &amp;ompi_mpi_char.dt );
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#elif (OMPI_SIZEOF_FORTRAN_INTEGER1 == SIZEOF_SHORT)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#elif (OPAL_SIZEOF_FORTRAN_INTEGER1 == SIZEOF_SHORT)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      DECLARE_MPI_SYNONYM_DDT( &amp;ompi_mpi_integer1.dt, &quot;MPI_INTEGER1&quot;,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &amp;ompi_mpi_short.dt );
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#elif (OMPI_SIZEOF_FORTRAN_INTEGER1 == SIZEOF_INT)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#elif (OPAL_SIZEOF_FORTRAN_INTEGER1 == SIZEOF_INT)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      DECLARE_MPI_SYNONYM_DDT( &amp;ompi_mpi_integer1.dt, &quot;MPI_INTEGER1&quot;,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &amp;ompi_mpi_int.dt );
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #else
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #   warning &quot;No proper C type found for INTEGER1&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      DECLARE_MPI_SYNONYM_DDT( &amp;ompi_mpi_integer1.dt, &quot;MPI_INTEGER1&quot;,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &amp;ompi_mpi_unavailable.dt );
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      ompi_mpi_integer1.dt.flags |= DT_FLAG_DATA_FORTRAN |
</span><br>
<span class="quotelev3">&gt;&gt;&gt; DT_FLAG_DATA_INT;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#endif /* OMPI_HAVE_FORTRAN_INTEGER1 */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#endif /* OPAL_HAVE_FORTRAN_INTEGER1 */
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_HAVE_FORTRAN_INTEGER2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if (OMPI_SIZEOF_FORTRAN_INTEGER2 == SIZEOF_SHORT)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_HAVE_FORTRAN_INTEGER2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if (OPAL_SIZEOF_FORTRAN_INTEGER2 == SIZEOF_SHORT)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      DECLARE_MPI_SYNONYM_DDT( &amp;ompi_mpi_integer2.dt, &quot;MPI_INTEGER2&quot;,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &amp;ompi_mpi_short.dt );
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#elif (OMPI_SIZEOF_FORTRAN_INTEGER2 == SIZEOF_INT)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#elif (OPAL_SIZEOF_FORTRAN_INTEGER2 == SIZEOF_INT)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      DECLARE_MPI_SYNONYM_DDT( &amp;ompi_mpi_integer2.dt, &quot;MPI_INTEGER2&quot;,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &amp;ompi_mpi_int.dt );
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #else
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #   warning &quot;No proper C type found for INTEGER2&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      DECLARE_MPI_SYNONYM_DDT( &amp;ompi_mpi_integer2.dt, &quot;MPI_INTEGER2&quot;,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &amp;ompi_mpi_unavailable.dt );
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      ompi_mpi_integer2.dt.flags |= DT_FLAG_DATA_FORTRAN |
</span><br>
<span class="quotelev3">&gt;&gt;&gt; DT_FLAG_DATA_INT;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#endif /* OMPI_HAVE_FORTRAN_INTEGER2 */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#endif /* OPAL_HAVE_FORTRAN_INTEGER2 */
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_HAVE_FORTRAN_INTEGER4
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if (OMPI_SIZEOF_FORTRAN_INTEGER4 == SIZEOF_INT)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_HAVE_FORTRAN_INTEGER4
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if (OPAL_SIZEOF_FORTRAN_INTEGER4 == SIZEOF_INT)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      DECLARE_MPI_SYNONYM_DDT( &amp;ompi_mpi_integer4.dt, &quot;MPI_INTEGER4&quot;,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &amp;ompi_mpi_int.dt );
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#elif (OMPI_SIZEOF_FORTRAN_INTEGER4 == SIZEOF_LONG)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#elif (OPAL_SIZEOF_FORTRAN_INTEGER4 == SIZEOF_LONG)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      DECLARE_MPI_SYNONYM_DDT( &amp;ompi_mpi_integer4.dt, &quot;MPI_INTEGER4&quot;,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &amp;ompi_mpi_long.dt );
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #else
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #   warning &quot;No proper C type found for INTEGER4&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      DECLARE_MPI_SYNONYM_DDT( &amp;ompi_mpi_integer4.dt, &quot;MPI_INTEGER4&quot;,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &amp;ompi_mpi_unavailable.dt );
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      ompi_mpi_integer4.dt.flags |= DT_FLAG_DATA_FORTRAN |
</span><br>
<span class="quotelev3">&gt;&gt;&gt; DT_FLAG_DATA_INT;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#endif /* OMPI_HAVE_FORTRAN_INTEGER4 */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#endif /* OPAL_HAVE_FORTRAN_INTEGER4 */
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_HAVE_FORTRAN_INTEGER8
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if (OMPI_SIZEOF_FORTRAN_INTEGER8 == SIZEOF_LONG)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_HAVE_FORTRAN_INTEGER8
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if (OPAL_SIZEOF_FORTRAN_INTEGER8 == SIZEOF_LONG)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      DECLARE_MPI_SYNONYM_DDT( &amp;ompi_mpi_integer8.dt, &quot;MPI_INTEGER8&quot;,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &amp;ompi_mpi_long.dt );
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#elif (OMPI_SIZEOF_FORTRAN_INTEGER8 == SIZEOF_LONG_LONG)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#elif (OPAL_SIZEOF_FORTRAN_INTEGER8 == SIZEOF_LONG_LONG)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      DECLARE_MPI_SYNONYM_DDT( &amp;ompi_mpi_integer8.dt, &quot;MPI_INTEGER8&quot;,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &amp;ompi_mpi_long_long_int.dt );
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #else
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #   warning &quot;No proper C type found for INTEGER8&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      DECLARE_MPI_SYNONYM_DDT( &amp;ompi_mpi_integer8.dt, &quot;MPI_INTEGER8&quot;,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &amp;ompi_mpi_unavailable.dt );
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      ompi_mpi_integer8.dt.flags |= DT_FLAG_DATA_FORTRAN |
</span><br>
<span class="quotelev3">&gt;&gt;&gt; DT_FLAG_DATA_INT;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#endif /* OMPI_HAVE_FORTRAN_INTEGER8 */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#endif /* OPAL_HAVE_FORTRAN_INTEGER8 */
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_HAVE_FORTRAN_INTEGER16
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if (OMPI_SIZEOF_FORTRAN_INTEGER16 == SIZEOF_LONG_LONG)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_HAVE_FORTRAN_INTEGER16
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if (OPAL_SIZEOF_FORTRAN_INTEGER16 == SIZEOF_LONG_LONG)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      DECLARE_MPI_SYNONYM_DDT( &amp;ompi_mpi_integer16.dt,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;MPI_INTEGER16&quot;, &amp;ompi_mpi_long_long_int.dt );
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #else
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #   warning &quot;No proper C type found for INTEGER16&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      DECLARE_MPI_SYNONYM_DDT( &amp;ompi_mpi_integer16.dt,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;MPI_INTEGER16&quot;, &amp;ompi_mpi_unavailable.dt );
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      ompi_mpi_integer16.dt.flags |= DT_FLAG_DATA_FORTRAN |
</span><br>
<span class="quotelev3">&gt;&gt;&gt; DT_FLAG_DATA_INT;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#endif /* OMPI_HAVE_FORTRAN_INTEGER16 */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#endif /* OPAL_HAVE_FORTRAN_INTEGER16 */
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      /* Optional Fortran COMPLEX types */
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_HAVE_FORTRAN_COMPLEX8
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if (OMPI_SIZEOF_FORTRAN_COMPLEX8 == 2*SIZEOF_FLOAT)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_HAVE_FORTRAN_COMPLEX8
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if (OPAL_SIZEOF_FORTRAN_COMPLEX8 == 2*SIZEOF_FLOAT)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      DECLARE_MPI_SYNONYM_DDT( &amp;ompi_mpi_complex8.dt, &quot;MPI_COMPLEX8&quot;,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &amp;ompi_mpi_cplex.dt );
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #else
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #   warning &quot;No proper C type found for COMPLEX8&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      DECLARE_MPI_SYNONYM_DDT( &amp;ompi_mpi_complex8.dt, &quot;MPI_COMPLEX8&quot;,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &amp;ompi_mpi_unavailable.dt );
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      ompi_mpi_complex8.dt.flags |= DT_FLAG_DATA_FORTRAN |
</span><br>
<span class="quotelev3">&gt;&gt;&gt; DT_FLAG_DATA_COMPLEX;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#endif /* OMPI_HAVE_FORTRAN_COMPLEX8 */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#endif /* OPAL_HAVE_FORTRAN_COMPLEX8 */
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_HAVE_FORTRAN_COMPLEX16
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if (OMPI_SIZEOF_FORTRAN_COMPLEX16 == 2*SIZEOF_FLOAT)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_HAVE_FORTRAN_COMPLEX16
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if (OPAL_SIZEOF_FORTRAN_COMPLEX16 == 2*SIZEOF_FLOAT)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      DECLARE_MPI_SYNONYM_DDT( &amp;ompi_mpi_complex16.dt,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;MPI_COMPLEX16&quot;, &amp;ompi_mpi_cplex.dt );
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#elif (OMPI_SIZEOF_FORTRAN_COMPLEX16 == 2*SIZEOF_DOUBLE)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#elif (OPAL_SIZEOF_FORTRAN_COMPLEX16 == 2*SIZEOF_DOUBLE)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      DECLARE_MPI_SYNONYM_DDT( &amp;ompi_mpi_complex16.dt,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;MPI_COMPLEX16&quot;, &amp;ompi_mpi_dblcplex.dt );
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #else
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #   warning &quot;No proper C type found for COMPLEX16&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      DECLARE_MPI_SYNONYM_DDT( &amp;ompi_mpi_complex16.dt,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;MPI_COMPLEX16&quot;, &amp;ompi_mpi_unavailable.dt );
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      ompi_mpi_complex16.dt.flags |= DT_FLAG_DATA_FORTRAN |
</span><br>
<span class="quotelev3">&gt;&gt;&gt; DT_FLAG_DATA_COMPLEX;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#endif /* OMPI_HAVE_FORTRAN_COMPLEX16 */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#endif /* OPAL_HAVE_FORTRAN_COMPLEX16 */
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_HAVE_FORTRAN_COMPLEX32
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_REAL16_MATCHES_C &amp;&amp; (OMPI_SIZEOF_FORTRAN_COMPLEX32 ==
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 2*SIZEOF_LONG_DOUBLE)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_HAVE_FORTRAN_COMPLEX32
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_REAL16_MATCHES_C &amp;&amp; (OPAL_SIZEOF_FORTRAN_COMPLEX32 ==
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 2*SIZEOF_LONG_DOUBLE)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      DECLARE_MPI_SYNONYM_DDT( &amp;ompi_mpi_complex32.dt,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;MPI_COMPLEX32&quot;, &amp;ompi_mpi_ldblcplex.dt );
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #else
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #   warning &quot;No proper C type found for COMPLEX32&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      DECLARE_MPI_SYNONYM_DDT( &amp;ompi_mpi_complex32.dt,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;MPI_COMPLEX32&quot;, &amp;ompi_mpi_unavailable.dt );
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      ompi_mpi_complex32.dt.flags |= DT_FLAG_DATA_FORTRAN |
</span><br>
<span class="quotelev3">&gt;&gt;&gt; DT_FLAG_DATA_COMPLEX;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#endif /* OMPI_HAVE_FORTRAN_COMPLEX32 */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#endif /* OPAL_HAVE_FORTRAN_COMPLEX32 */
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      /* Start to populate the f2c index translation table */
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Modified: trunk/ompi/errhandler/errcode-internal.c
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ======================================================================
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --- trunk/ompi/errhandler/errcode-internal.c    (original)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +++ trunk/ompi/errhandler/errcode-internal.c    2009-05-30 11:54:29
</span><br>
<span class="quotelev3">&gt;&gt;&gt; EDT (Sat, 30 May 2009)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -61,7 +61,7 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         the error objects */
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      OBJ_CONSTRUCT(&amp;ompi_errcodes_intern, opal_pointer_array_t);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      if( OPAL_SUCCESS !=
</span><br>
<span class="quotelev3">&gt;&gt;&gt; opal_pointer_array_init(&amp;ompi_errcodes_intern,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -                                                0,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OMPI_FORTRAN_HANDLE_MAX, 64) ) {
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +                                                0,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OPAL_FORTRAN_HANDLE_MAX, 64) ) {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          return OMPI_ERROR;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      }
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Modified: trunk/ompi/errhandler/errcode.c
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ======================================================================
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --- trunk/ompi/errhandler/errcode.c     (original)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +++ trunk/ompi/errhandler/errcode.c     2009-05-30 11:54:29 EDT
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (Sat, 30 May 2009)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -111,7 +111,7 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         the error objects */
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      OBJ_CONSTRUCT(&amp;ompi_mpi_errcodes, opal_pointer_array_t);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      if( OPAL_SUCCESS != opal_pointer_array_init(&amp;ompi_mpi_errcodes,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 0,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OMPI_FORTRAN_HANDLE_MAX, 64) ) {
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OPAL_FORTRAN_HANDLE_MAX, 64) ) {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          return OMPI_ERROR;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      }
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Modified: trunk/ompi/errhandler/errhandler.c
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ======================================================================
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --- trunk/ompi/errhandler/errhandler.c  (original)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +++ trunk/ompi/errhandler/errhandler.c  2009-05-30 11:54:29 EDT
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (Sat, 30 May 2009)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -76,7 +76,7 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    OBJ_CONSTRUCT( &amp;ompi_errhandler_f_to_c_table,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; opal_pointer_array_t);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    if( OPAL_SUCCESS !=
</span><br>
<span class="quotelev3">&gt;&gt;&gt; opal_pointer_array_init(&amp;ompi_errhandler_f_to_c_table, 0,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OMPI_FORTRAN_HANDLE_MAX, 64) ) {
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OPAL_FORTRAN_HANDLE_MAX, 64) ) {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      return OMPI_ERROR;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    }
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Modified: trunk/ompi/file/file.c
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ======================================================================
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --- trunk/ompi/file/file.c      (original)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +++ trunk/ompi/file/file.c      2009-05-30 11:54:29 EDT (Sat, 30 May
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 2009)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -64,7 +64,7 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      OBJ_CONSTRUCT(&amp;ompi_file_f_to_c_table, opal_pointer_array_t);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      if( OPAL_SUCCESS !=
</span><br>
<span class="quotelev3">&gt;&gt;&gt; opal_pointer_array_init(&amp;ompi_file_f_to_c_table, 0,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OMPI_FORTRAN_HANDLE_MAX, 64) ) {
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OPAL_FORTRAN_HANDLE_MAX, 64) ) {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          return OMPI_ERROR;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      }
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Modified: trunk/ompi/group/group_init.c
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ======================================================================
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --- trunk/ompi/group/group_init.c       (original)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +++ trunk/ompi/group/group_init.c       2009-05-30 11:54:29 EDT
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (Sat, 30 May 2009)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -308,7 +308,7 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      /* initialize ompi_group_f_to_c_table */
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      OBJ_CONSTRUCT( &amp;ompi_group_f_to_c_table, opal_pointer_array_t);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      if( OPAL_SUCCESS !=
</span><br>
<span class="quotelev3">&gt;&gt;&gt; opal_pointer_array_init(&amp;ompi_group_f_to_c_table, 0,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OMPI_FORTRAN_HANDLE_MAX, 64) ) {
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OPAL_FORTRAN_HANDLE_MAX, 64) ) {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          return OMPI_ERROR;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      }
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Modified: trunk/ompi/include/mpi.h.in
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ======================================================================
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --- trunk/ompi/include/mpi.h.in (original)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +++ trunk/ompi/include/mpi.h.in 2009-05-30 11:54:29 EDT (Sat, 30 May
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 2009)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -87,43 +87,43 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #undef OPAL_MAX_PROCESSOR_NAME
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  /* Whether we have FORTRAN LOGICAL*1 or not */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#undef OMPI_HAVE_FORTRAN_LOGICAL1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#undef OPAL_HAVE_FORTRAN_LOGICAL1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  /* Whether we have FORTRAN LOGICAL*2 or not */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#undef OMPI_HAVE_FORTRAN_LOGICAL2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#undef OPAL_HAVE_FORTRAN_LOGICAL2
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  /* Whether we have FORTRAN LOGICAL*4 or not */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#undef OMPI_HAVE_FORTRAN_LOGICAL4
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#undef OPAL_HAVE_FORTRAN_LOGICAL4
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  /* Whether we have FORTRAN LOGICAL*8 or not */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#undef OMPI_HAVE_FORTRAN_LOGICAL8
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#undef OPAL_HAVE_FORTRAN_LOGICAL8
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  /* Whether we have FORTRAN INTEGER*1 or not */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#undef OMPI_HAVE_FORTRAN_INTEGER1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#undef OPAL_HAVE_FORTRAN_INTEGER1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  /* Whether we have FORTRAN INTEGER*16 or not */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#undef OMPI_HAVE_FORTRAN_INTEGER16
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#undef OPAL_HAVE_FORTRAN_INTEGER16
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  /* Whether we have FORTRAN INTEGER*2 or not */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#undef OMPI_HAVE_FORTRAN_INTEGER2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#undef OPAL_HAVE_FORTRAN_INTEGER2
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  /* Whether we have FORTRAN INTEGER*4 or not */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#undef OMPI_HAVE_FORTRAN_INTEGER4
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#undef OPAL_HAVE_FORTRAN_INTEGER4
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  /* Whether we have FORTRAN INTEGER*8 or not */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#undef OMPI_HAVE_FORTRAN_INTEGER8
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#undef OPAL_HAVE_FORTRAN_INTEGER8
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  /* Whether we have FORTRAN REAL*16 or not */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#undef OMPI_HAVE_FORTRAN_REAL16
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#undef OPAL_HAVE_FORTRAN_REAL16
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  /* Whether we have FORTRAN REAL*2 or not */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#undef OMPI_HAVE_FORTRAN_REAL2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#undef OPAL_HAVE_FORTRAN_REAL2
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  /* Whether we have FORTRAN REAL*4 or not */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#undef OMPI_HAVE_FORTRAN_REAL4
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#undef OPAL_HAVE_FORTRAN_REAL4
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  /* Whether we have FORTRAN REAL*8 or not */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#undef OMPI_HAVE_FORTRAN_REAL8
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#undef OPAL_HAVE_FORTRAN_REAL8
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  /* Type of MPI_Offset -- has to be defined here and typedef'ed
</span><br>
<span class="quotelev3">&gt;&gt;&gt; later because mpi.h does not get AC SUBST's */
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #undef OMPI_MPI_OFFSET_TYPE
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -166,10 +166,10 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  /* A  type that allows us to have sentinel type values that are still
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     valid */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#undef ompi_fortran_bogus_type_t
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#undef opal_fortran_bogus_type_t
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  /* C type corresponding to FORTRAN INTEGER */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#undef ompi_fortran_integer_t
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#undef opal_fortran_integer_t
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  /* Whether C compiler supports -fvisibility */
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #undef OPAL_C_HAVE_VISIBILITY
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -194,8 +194,8 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #ifndef MPI_Fint
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -/* MPI_Fint is the same as ompi_fortran_INTEGER_t */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#define MPI_Fint ompi_fortran_integer_t
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +/* MPI_Fint is the same as opal_fortran_integer_t */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#define MPI_Fint opal_fortran_integer_t
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #endif /* #ifndef OMPI_CONFIG_H */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -766,52 +766,52 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  OMPI_DECLSPEC extern struct ompi_predefined_datatype_t
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ompi_mpi_cxx_bool;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  OMPI_DECLSPEC extern struct ompi_predefined_datatype_t
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ompi_mpi_2cplex, ompi_mpi_2dblcplex;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  /* other MPI2 datatypes */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_HAVE_FORTRAN_LOGICAL1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_HAVE_FORTRAN_LOGICAL1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  OMPI_DECLSPEC extern struct ompi_predefined_datatype_t
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ompi_mpi_logical1;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_HAVE_FORTRAN_LOGICAL2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_HAVE_FORTRAN_LOGICAL2
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  OMPI_DECLSPEC extern struct ompi_predefined_datatype_t
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ompi_mpi_logical2;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_HAVE_FORTRAN_LOGICAL4
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_HAVE_FORTRAN_LOGICAL4
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  OMPI_DECLSPEC extern struct ompi_predefined_datatype_t
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ompi_mpi_logical4;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_HAVE_FORTRAN_LOGICAL8
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_HAVE_FORTRAN_LOGICAL8
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  OMPI_DECLSPEC extern struct ompi_predefined_datatype_t
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ompi_mpi_logical8;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_HAVE_FORTRAN_INTEGER1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_HAVE_FORTRAN_INTEGER1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  OMPI_DECLSPEC extern struct ompi_predefined_datatype_t
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ompi_mpi_integer1;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_HAVE_FORTRAN_INTEGER2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_HAVE_FORTRAN_INTEGER2
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  OMPI_DECLSPEC extern struct ompi_predefined_datatype_t
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ompi_mpi_integer2;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_HAVE_FORTRAN_INTEGER4
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_HAVE_FORTRAN_INTEGER4
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  OMPI_DECLSPEC extern struct ompi_predefined_datatype_t
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ompi_mpi_integer4;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_HAVE_FORTRAN_INTEGER8
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_HAVE_FORTRAN_INTEGER8
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  OMPI_DECLSPEC extern struct ompi_predefined_datatype_t
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ompi_mpi_integer8;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_HAVE_FORTRAN_INTEGER16
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_HAVE_FORTRAN_INTEGER16
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  OMPI_DECLSPEC extern struct ompi_predefined_datatype_t
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ompi_mpi_integer16;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_HAVE_FORTRAN_REAL2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_HAVE_FORTRAN_REAL2
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  OMPI_DECLSPEC extern struct ompi_predefined_datatype_t
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ompi_mpi_real2;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_HAVE_FORTRAN_REAL4
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_HAVE_FORTRAN_REAL4
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  OMPI_DECLSPEC extern struct ompi_predefined_datatype_t
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ompi_mpi_real4;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_HAVE_FORTRAN_REAL8
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_HAVE_FORTRAN_REAL8
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  OMPI_DECLSPEC extern struct ompi_predefined_datatype_t
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ompi_mpi_real8;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_HAVE_FORTRAN_REAL16
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_HAVE_FORTRAN_REAL16
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  OMPI_DECLSPEC extern struct ompi_predefined_datatype_t
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ompi_mpi_real16;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_HAVE_FORTRAN_REAL4
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_HAVE_FORTRAN_REAL4
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  OMPI_DECLSPEC extern struct ompi_predefined_datatype_t
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ompi_mpi_complex8;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_HAVE_FORTRAN_REAL8
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_HAVE_FORTRAN_REAL8
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  OMPI_DECLSPEC extern struct ompi_predefined_datatype_t
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ompi_mpi_complex16;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_HAVE_FORTRAN_REAL16
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_HAVE_FORTRAN_REAL16
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  OMPI_DECLSPEC extern struct ompi_predefined_datatype_t
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ompi_mpi_complex32;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -885,53 +885,53 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  /* Fortran datatype bindings */
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #define MPI_CHARACTER OMPI_PREDEFINED_GLOBAL(MPI_Datatype,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ompi_mpi_character)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #define MPI_LOGICAL OMPI_PREDEFINED_GLOBAL(MPI_Datatype,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ompi_mpi_logic)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_HAVE_FORTRAN_LOGICAL1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_HAVE_FORTRAN_LOGICAL1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #define MPI_LOGICAL1 OMPI_PREDEFINED_GLOBAL(MPI_Datatype,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ompi_mpi_logical1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_HAVE_FORTRAN_LOGICAL2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_HAVE_FORTRAN_LOGICAL2
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #define MPI_LOGICAL2 OMPI_PREDEFINED_GLOBAL(MPI_Datatype,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ompi_mpi_logical2)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_HAVE_FORTRAN_LOGICAL4
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_HAVE_FORTRAN_LOGICAL4
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #define MPI_LOGICAL4 OMPI_PREDEFINED_GLOBAL(MPI_Datatype,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ompi_mpi_logical4)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_HAVE_FORTRAN_LOGICAL8
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_HAVE_FORTRAN_LOGICAL8
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #define MPI_LOGICAL8 OMPI_PREDEFINED_GLOBAL(MPI_Datatype,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ompi_mpi_logical8)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #define MPI_INTEGER OMPI_PREDEFINED_GLOBAL(MPI_Datatype,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ompi_mpi_integer)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_HAVE_FORTRAN_INTEGER1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_HAVE_FORTRAN_INTEGER1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #define MPI_INTEGER1 OMPI_PREDEFINED_GLOBAL(MPI_Datatype,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ompi_mpi_integer1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_HAVE_FORTRAN_INTEGER2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_HAVE_FORTRAN_INTEGER2
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #define MPI_INTEGER2 OMPI_PREDEFINED_GLOBAL(MPI_Datatype,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ompi_mpi_integer2)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_HAVE_FORTRAN_INTEGER4
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_HAVE_FORTRAN_INTEGER4
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #define MPI_INTEGER4 OMPI_PREDEFINED_GLOBAL(MPI_Datatype,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ompi_mpi_integer4)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_HAVE_FORTRAN_INTEGER8
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_HAVE_FORTRAN_INTEGER8
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #define MPI_INTEGER8 OMPI_PREDEFINED_GLOBAL(MPI_Datatype,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ompi_mpi_integer8)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_HAVE_FORTRAN_INTEGER16
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_HAVE_FORTRAN_INTEGER16
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #define MPI_INTEGER16 OMPI_PREDEFINED_GLOBAL(MPI_Datatype,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ompi_mpi_integer16)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #define MPI_REAL OMPI_PREDEFINED_GLOBAL(MPI_Datatype, ompi_mpi_real)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_HAVE_FORTRAN_REAL4
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_HAVE_FORTRAN_REAL4
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #define MPI_REAL4 OMPI_PREDEFINED_GLOBAL(MPI_Datatype,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ompi_mpi_real4)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_HAVE_FORTRAN_REAL8
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_HAVE_FORTRAN_REAL8
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #define MPI_REAL8 OMPI_PREDEFINED_GLOBAL(MPI_Datatype,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ompi_mpi_real8)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_HAVE_FORTRAN_REAL16
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_HAVE_FORTRAN_REAL16
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #define MPI_REAL16 OMPI_PREDEFINED_GLOBAL(MPI_Datatype,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ompi_mpi_real16)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #define MPI_DOUBLE_PRECISION OMPI_PREDEFINED_GLOBAL(MPI_Datatype,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ompi_mpi_dblprec)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #define MPI_COMPLEX OMPI_PREDEFINED_GLOBAL(MPI_Datatype,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ompi_mpi_cplex)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_HAVE_FORTRAN_REAL4
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_HAVE_FORTRAN_REAL4
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #define MPI_COMPLEX8 OMPI_PREDEFINED_GLOBAL(MPI_Datatype,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ompi_mpi_complex8)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_HAVE_FORTRAN_REAL8
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_HAVE_FORTRAN_REAL8
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #define MPI_COMPLEX16 OMPI_PREDEFINED_GLOBAL(MPI_Datatype,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ompi_mpi_complex16)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_HAVE_FORTRAN_REAL16
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_HAVE_FORTRAN_REAL16
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #define MPI_COMPLEX32 OMPI_PREDEFINED_GLOBAL(MPI_Datatype,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ompi_mpi_complex32)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #define MPI_DOUBLE_COMPLEX OMPI_PREDEFINED_GLOBAL(MPI_Datatype,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ompi_mpi_dblcplex)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Modified: trunk/ompi/include/ompi_config.h.in
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ======================================================================
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --- trunk/ompi/include/ompi_config.h.in (original)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +++ trunk/ompi/include/ompi_config.h.in 2009-05-30 11:54:29 EDT
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (Sat, 30 May 2009)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -35,50 +35,50 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   *
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; **********************************************************************/
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -/* MPI_Fint is the same as ompi_fortran_INTEGER_t */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#define MPI_Fint ompi_fortran_integer_t
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +/* MPI_Fint is the same as opal_fortran_integer_t */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#define MPI_Fint opal_fortran_integer_t
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -/* MPI_Flogical is the same as the ompi_fortran_logical_t */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#define MPI_Flogical ompi_fortran_logical_t
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +/* MPI_Flogical is the same as the opal_fortran_logical_t */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#define MPI_Flogical opal_fortran_logical_t
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_HAVE_FORTRAN_REAL &amp;&amp; OMPI_HAVE_FORTRAN_COMPLEX
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_HAVE_FORTRAN_REAL &amp;&amp; OPAL_HAVE_FORTRAN_COMPLEX
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  /* * C type for Fortran COMPLEX */
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  typedef struct {
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -  ompi_fortran_real_t real;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -  ompi_fortran_real_t imag;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -} ompi_fortran_complex_t;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +  opal_fortran_real_t real;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +  opal_fortran_real_t imag;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +} opal_fortran_complex_t;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_HAVE_FORTRAN_REAL4 &amp;&amp; OMPI_HAVE_FORTRAN_COMPLEX8
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_HAVE_FORTRAN_REAL4 &amp;&amp; OPAL_HAVE_FORTRAN_COMPLEX8
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  /* * C type for Fortran COMPLEX*8 */
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  typedef struct {
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -  ompi_fortran_real4_t real;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -  ompi_fortran_real4_t imag;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -} ompi_fortran_complex8_t;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +  opal_fortran_real4_t real;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +  opal_fortran_real4_t imag;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +} opal_fortran_complex8_t;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_HAVE_FORTRAN_REAL8 &amp;&amp; OMPI_HAVE_FORTRAN_COMPLEX16
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_HAVE_FORTRAN_REAL8 &amp;&amp; OPAL_HAVE_FORTRAN_COMPLEX16
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  /* * C type for Fortran COMPLEX*16 */
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  typedef struct {
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -  ompi_fortran_real8_t real;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -  ompi_fortran_real8_t imag;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -} ompi_fortran_complex16_t;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +  opal_fortran_real8_t real;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +  opal_fortran_real8_t imag;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +} opal_fortran_complex16_t;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_HAVE_FORTRAN_REAL16 &amp;&amp; OMPI_HAVE_FORTRAN_COMPLEX32
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_HAVE_FORTRAN_REAL16 &amp;&amp; OPAL_HAVE_FORTRAN_COMPLEX32
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  /* * C type for Fortran COMPLEX*32 */
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  typedef struct {
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -  ompi_fortran_real16_t real;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -  ompi_fortran_real16_t imag;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -} ompi_fortran_complex32_t;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +  opal_fortran_real16_t real;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +  opal_fortran_real16_t imag;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +} opal_fortran_complex32_t;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_HAVE_FORTRAN_DOUBLE_PRECISION
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_HAVE_FORTRAN_DOUBLE_PRECISION
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  /* * C type for Fortran DOUBLE COMPLEX */
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  typedef struct {
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -  ompi_fortran_double_precision_t real;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -  ompi_fortran_double_precision_t imag;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -} ompi_fortran_double_complex_t;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +  opal_fortran_double_precision_t real;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +  opal_fortran_double_precision_t imag;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +} opal_fortran_double_complex_t;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Modified: trunk/ompi/info/info.c
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ======================================================================
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --- trunk/ompi/info/info.c      (original)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +++ trunk/ompi/info/info.c      2009-05-30 11:54:29 EDT (Sat, 30 May
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 2009)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -85,7 +85,7 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      OBJ_CONSTRUCT(&amp;ompi_info_f_to_c_table, opal_pointer_array_t);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      if( OPAL_SUCCESS !=
</span><br>
<span class="quotelev3">&gt;&gt;&gt; opal_pointer_array_init(&amp;ompi_info_f_to_c_table, 0,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OMPI_FORTRAN_HANDLE_MAX, 64) ) {
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OPAL_FORTRAN_HANDLE_MAX, 64) ) {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          return OMPI_ERROR;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      }
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Modified: trunk/ompi/mca/op/base/functions.h
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ======================================================================
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --- trunk/ompi/mca/op/base/functions.h  (original)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +++ trunk/ompi/mca/op/base/functions.h  2009-05-30 11:54:29 EDT
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (Sat, 30 May 2009)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -56,31 +56,31 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #define OMPI_OP_HANDLER_FORTRAN_INTEGER_INTRINSIC(name) \
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    void ompi_op_base_##name##_fortran_integer OMPI_OP_PROTO;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_HAVE_FORTRAN_INTEGER1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_HAVE_FORTRAN_INTEGER1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #define OMPI_OP_HANDLER_FORTRAN_INTEGER1(name) \
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    void ompi_op_base_##name##_fortran_integer1 OMPI_OP_PROTO;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #else
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #define OMPI_OP_HANDLER_FORTRAN_INTEGER1(name)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_HAVE_FORTRAN_INTEGER2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_HAVE_FORTRAN_INTEGER2
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #define OMPI_OP_HANDLER_FORTRAN_INTEGER2(name) \
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    void ompi_op_base_##name##_fortran_integer2 OMPI_OP_PROTO;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #else
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #define OMPI_OP_HANDLER_FORTRAN_INTEGER2(name)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_HAVE_FORTRAN_INTEGER4
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_HAVE_FORTRAN_INTEGER4
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #define OMPI_OP_HANDLER_FORTRAN_INTEGER4(name) \
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    void ompi_op_base_##name##_fortran_integer4 OMPI_OP_PROTO;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #else
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #define OMPI_OP_HANDLER_FORTRAN_INTEGER4(name)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_HAVE_FORTRAN_INTEGER8
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_HAVE_FORTRAN_INTEGER8
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #define OMPI_OP_HANDLER_FORTRAN_INTEGER8(name) \
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    void ompi_op_base_##name##_fortran_integer8 OMPI_OP_PROTO;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #else
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #define OMPI_OP_HANDLER_FORTRAN_INTEGER8(name)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_HAVE_FORTRAN_INTEGER16
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_HAVE_FORTRAN_INTEGER16
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #define OMPI_OP_HANDLER_FORTRAN_INTEGER16(name) \
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    void ompi_op_base_##name##_fortran_integer16 OMPI_OP_PROTO;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #else
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -102,25 +102,25 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    void ompi_op_base_##name##_fortran_real OMPI_OP_PROTO; \
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    void ompi_op_base_##name##_fortran_double_precision
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OMPI_OP_PROTO; \
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    void ompi_op_base_##name##_long_double OMPI_OP_PROTO;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_HAVE_FORTRAN_REAL2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_HAVE_FORTRAN_REAL2
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #define OMPI_OP_HANDLER_FLOATING_POINT_REAL2(name) \
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    void ompi_op_base_##name##_fortran_real2 OMPI_OP_PROTO;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #else
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #define OMPI_OP_HANDLER_FLOATING_POINT_REAL2(name)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_HAVE_FORTRAN_REAL4
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_HAVE_FORTRAN_REAL4
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #define OMPI_OP_HANDLER_FLOATING_POINT_REAL4(name) \
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    void ompi_op_base_##name##_fortran_real4 OMPI_OP_PROTO;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #else
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #define OMPI_OP_HANDLER_FLOATING_POINT_REAL4(name)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_HAVE_FORTRAN_REAL8
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_HAVE_FORTRAN_REAL8
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #define OMPI_OP_HANDLER_FLOATING_POINT_REAL8(name) \
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    void ompi_op_base_##name##_fortran_real8 OMPI_OP_PROTO;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #else
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #define OMPI_OP_HANDLER_FLOATING_POINT_REAL8(name)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_HAVE_FORTRAN_REAL16
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_HAVE_FORTRAN_REAL16
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #define OMPI_OP_HANDLER_FLOATING_POINT_REAL16(name) \
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    void ompi_op_base_##name##_fortran_real16 OMPI_OP_PROTO;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #else
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -140,31 +140,31 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  /* Complex */
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_HAVE_FORTRAN_REAL
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_HAVE_FORTRAN_REAL
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #define OMPI_OP_HANDLER_COMPLEX_INTRINSIC(name) \
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    void ompi_op_base_##name##_fortran_complex OMPI_OP_PROTO;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #else
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #define OMPI_OP_HANDLER_COMPLEX_INTRINSIC(name)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_HAVE_FORTRAN_DOUBLE_PRECISION
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_HAVE_FORTRAN_DOUBLE_PRECISION
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #define OMPI_OP_HANDLER_DOUBLE_COMPLEX_INTRINSIC(name) \
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    void ompi_op_base_##name##_fortran_double_complex OMPI_OP_PROTO;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #else
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #define OMPI_OP_HANDLER_DOUBLE_COMPLEX_INTRINSIC(name)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_HAVE_FORTRAN_REAL4
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_HAVE_FORTRAN_REAL4
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #define OMPI_OP_HANDLER_COMPLEX8(name) \
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    void ompi_op_base_##name##_fortran_complex8 OMPI_OP_PROTO;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #else
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #define OMPI_OP_HANDLER_COMPLEX8(name)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_HAVE_FORTRAN_REAL8
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_HAVE_FORTRAN_REAL8
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #define OMPI_OP_HANDLER_COMPLEX16(name) \
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    void ompi_op_base_##name##_fortran_complex16 OMPI_OP_PROTO;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #else
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #define OMPI_OP_HANDLER_COMPLEX16(name)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_HAVE_FORTRAN_REAL16
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_HAVE_FORTRAN_REAL16
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #define OMPI_OP_HANDLER_COMPLEX32(name) \
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    void ompi_op_base_##name##_fortran_complex32 OMPI_OP_PROTO;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #else
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -311,31 +311,31 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #define OMPI_OP_3BUFF_HANDLER_FORTRAN_INTEGER_INTRINSIC(name) \
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    void ompi_op_base_3buff_##name##_fortran_integer
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OMPI_OP_PROTO_3BUF;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_HAVE_FORTRAN_INTEGER1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_HAVE_FORTRAN_INTEGER1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #define OMPI_OP_3BUFF_HANDLER_FORTRAN_INTEGER1(name) \
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    void ompi_op_base_3buff_##name##_fortran_integer1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OMPI_OP_PROTO_3BUF;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #else
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #define OMPI_OP_3BUFF_HANDLER_FORTRAN_INTEGER1(name)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_HAVE_FORTRAN_INTEGER2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_HAVE_FORTRAN_INTEGER2
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #define OMPI_OP_3BUFF_HANDLER_FORTRAN_INTEGER2(name) \
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    void ompi_op_base_3buff_##name##_fortran_integer2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OMPI_OP_PROTO_3BUF;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #else
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #define OMPI_OP_3BUFF_HANDLER_FORTRAN_INTEGER2(name)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_HAVE_FORTRAN_INTEGER4
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_HAVE_FORTRAN_INTEGER4
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #define OMPI_OP_3BUFF_HANDLER_FORTRAN_INTEGER4(name) \
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    void ompi_op_base_3buff_##name##_fortran_integer4
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OMPI_OP_PROTO_3BUF;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #else
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #define OMPI_OP_3BUFF_HANDLER_FORTRAN_INTEGER4(name)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_HAVE_FORTRAN_INTEGER8
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_HAVE_FORTRAN_INTEGER8
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #define OMPI_OP_3BUFF_HANDLER_FORTRAN_INTEGER8(name) \
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    void ompi_op_base_3buff_##name##_fortran_integer8
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OMPI_OP_PROTO_3BUF;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #else
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #define OMPI_OP_3BUFF_HANDLER_FORTRAN_INTEGER8(name)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_HAVE_FORTRAN_INTEGER16
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_HAVE_FORTRAN_INTEGER16
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #define OMPI_OP_3BUFF_HANDLER_FORTRAN_INTEGER16(name) \
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    void ompi_op_base_3buff_##name##_fortran_integer16
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OMPI_OP_PROTO_3BUF;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #else
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -357,25 +357,25 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    void ompi_op_base_3buff_##name##_fortran_real OMPI_OP_PROTO_3BUF; \
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    void ompi_op_base_3buff_##name##_fortran_double_precision
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OMPI_OP_PROTO_3BUF; \
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    void ompi_op_base_3buff_##name##_long_double OMPI_OP_PROTO_3BUF;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_HAVE_FORTRAN_REAL2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_HAVE_FORTRAN_REAL2
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #define OMPI_OP_3BUFF_HANDLER_FLOATING_POINT_REAL2(name) \
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    void ompi_op_base_3buff_##name##_fortran_real2 OMPI_OP_PROTO_3BUF;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #else
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #define OMPI_OP_3BUFF_HANDLER_FLOATING_POINT_REAL2(name)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_HAVE_FORTRAN_REAL4
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_HAVE_FORTRAN_REAL4
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #define OMPI_OP_3BUFF_HANDLER_FLOATING_POINT_REAL4(name) \
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    void ompi_op_base_3buff_##name##_fortran_real4 OMPI_OP_PROTO_3BUF;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #else
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #define OMPI_OP_3BUFF_HANDLER_FLOATING_POINT_REAL4(name)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_HAVE_FORTRAN_REAL8
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_HAVE_FORTRAN_REAL8
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #define OMPI_OP_3BUFF_HANDLER_FLOATING_POINT_REAL8(name) \
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    void ompi_op_base_3buff_##name##_fortran_real8 OMPI_OP_PROTO_3BUF;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #else
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #define OMPI_OP_3BUFF_HANDLER_FLOATING_POINT_REAL8(name)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_HAVE_FORTRAN_REAL16
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_HAVE_FORTRAN_REAL16
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #define OMPI_OP_3BUFF_HANDLER_FLOATING_POINT_REAL16(name) \
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    void ompi_op_base_3buff_##name##_fortran_real16 OMPI_OP_PROTO_3BUF;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #else
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -395,31 +395,31 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  /* Complex */
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_HAVE_FORTRAN_REAL
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_HAVE_FORTRAN_REAL
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #define OMPI_OP_3BUFF_HANDLER_COMPLEX_INTRINSIC(name) \
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    void ompi_op_base_3buff_##name##_fortran_complex
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OMPI_OP_PROTO_3BUF;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #else
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #define OMPI_OP_3BUFF_HANDLER_COMPLEX_INTRINSIC(name)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_HAVE_FORTRAN_DOUBLE_PRECISION
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_HAVE_FORTRAN_DOUBLE_PRECISION
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #define OMPI_OP_3BUFF_HANDLER_DOUBLE_COMPLEX_INTRINSIC(name) \
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    void ompi_op_base_3buff_##name##_fortran_double_complex
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OMPI_OP_PROTO_3BUF;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #else
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #define OMPI_OP_3BUFF_HANDLER_DOUBLE_COMPLEX_INTRINSIC(name)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_HAVE_FORTRAN_REAL4
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_HAVE_FORTRAN_REAL4
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #define OMPI_OP_3BUFF_HANDLER_COMPLEX8(name) \
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    void ompi_op_base_3buff_##name##_fortran_complex8
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OMPI_OP_PROTO_3BUF;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #else
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #define OMPI_OP_3BUFF_HANDLER_COMPLEX8(name)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_HAVE_FORTRAN_REAL8
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_HAVE_FORTRAN_REAL8
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #define OMPI_OP_3BUFF_HANDLER_COMPLEX16(name) \
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    void ompi_op_base_3buff_##name##_fortran_complex16
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OMPI_OP_PROTO_3BUF;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #else
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #define OMPI_OP_3BUFF_HANDLER_COMPLEX16(name)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_HAVE_FORTRAN_REAL16
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_HAVE_FORTRAN_REAL16
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #define OMPI_OP_3BUFF_HANDLER_COMPLEX32(name) \
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    void ompi_op_base_3buff_##name##_fortran_complex32
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OMPI_OP_PROTO_3BUF;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #else
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Modified: trunk/ompi/mca/op/base/op_base_functions.c
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ======================================================================
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --- trunk/ompi/mca/op/base/op_base_functions.c  (original)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +++ trunk/ompi/mca/op/base/op_base_functions.c  2009-05-30 11:54:29
</span><br>
<span class="quotelev3">&gt;&gt;&gt; EDT (Sat, 30 May 2009)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -151,23 +151,23 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  FUNC_FUNC(max, unsigned_long_long, unsigned long long)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  /* Fortran integer */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_HAVE_FORTRAN_INTEGER
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -FUNC_FUNC(max, fortran_integer, ompi_fortran_integer_t)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_HAVE_FORTRAN_INTEGER
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +FUNC_FUNC(max, fortran_integer, opal_fortran_integer_t)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_HAVE_FORTRAN_INTEGER1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -FUNC_FUNC(max, fortran_integer1, ompi_fortran_integer1_t)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_HAVE_FORTRAN_INTEGER1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +FUNC_FUNC(max, fortran_integer1, opal_fortran_integer1_t)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_HAVE_FORTRAN_INTEGER2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -FUNC_FUNC(max, fortran_integer2, ompi_fortran_integer2_t)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_HAVE_FORTRAN_INTEGER2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +FUNC_FUNC(max, fortran_integer2, opal_fortran_integer2_t)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_HAVE_FORTRAN_INTEGER4
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -FUNC_FUNC(max, fortran_integer4, ompi_fortran_integer4_t)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_HAVE_FORTRAN_INTEGER4
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +FUNC_FUNC(max, fortran_integer4, opal_fortran_integer4_t)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_HAVE_FORTRAN_INTEGER8
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -FUNC_FUNC(max, fortran_integer8, ompi_fortran_integer8_t)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_HAVE_FORTRAN_INTEGER8
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +FUNC_FUNC(max, fortran_integer8, opal_fortran_integer8_t)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_HAVE_FORTRAN_INTEGER16
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -FUNC_FUNC(max, fortran_integer16, ompi_fortran_integer16_t)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_HAVE_FORTRAN_INTEGER16
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +FUNC_FUNC(max, fortran_integer16, opal_fortran_integer16_t)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  /* Floating point */
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  FUNC_FUNC(max, float, float)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -175,23 +175,23 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #if HAVE_LONG_DOUBLE
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  FUNC_FUNC(max, long_double, long double)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_HAVE_FORTRAN_REAL
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -FUNC_FUNC(max, fortran_real, ompi_fortran_real_t)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_HAVE_FORTRAN_REAL
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +FUNC_FUNC(max, fortran_real, opal_fortran_real_t)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_HAVE_FORTRAN_DOUBLE_PRECISION
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -FUNC_FUNC(max, fortran_double_precision,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ompi_fortran_double_precision_t)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_HAVE_FORTRAN_DOUBLE_PRECISION
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +FUNC_FUNC(max, fortran_double_precision,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; opal_fortran_double_precision_t)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_HAVE_FORTRAN_REAL2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -FUNC_FUNC(max, fortran_real2, ompi_fortran_real2_t)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_HAVE_FORTRAN_REAL2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +FUNC_FUNC(max, fortran_real2, opal_fortran_real2_t)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_HAVE_FORTRAN_REAL4
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -FUNC_FUNC(max, fortran_real4, ompi_fortran_real4_t)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_HAVE_FORTRAN_REAL4
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +FUNC_FUNC(max, fortran_real4, opal_fortran_real4_t)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_HAVE_FORTRAN_REAL8
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -FUNC_FUNC(max, fortran_real8, ompi_fortran_real8_t)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_HAVE_FORTRAN_REAL8
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +FUNC_FUNC(max, fortran_real8, opal_fortran_real8_t)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_HAVE_FORTRAN_REAL16
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -FUNC_FUNC(max, fortran_real16, ompi_fortran_real16_t)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_HAVE_FORTRAN_REAL16
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +FUNC_FUNC(max, fortran_real16, opal_fortran_real16_t)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -215,23 +215,23 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  FUNC_FUNC(min, unsigned_long_long, unsigned long long)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  /* Fortran integer */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_HAVE_FORTRAN_INTEGER
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -FUNC_FUNC(min, fortran_integer, ompi_fortran_integer_t)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_HAVE_FORTRAN_INTEGER
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +FUNC_FUNC(min, fortran_integer, opal_fortran_integer_t)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_HAVE_FORTRAN_INTEGER1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -FUNC_FUNC(min, fortran_integer1, ompi_fortran_integer1_t)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_HAVE_FORTRAN_INTEGER1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +FUNC_FUNC(min, fortran_integer1, opal_fortran_integer1_t)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_HAVE_FORTRAN_INTEGER2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -FUNC_FUNC(min, fortran_integer2, ompi_fortran_integer2_t)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_HAVE_FORTRAN_INTEGER2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +FUNC_FUNC(min, fortran_integer2, opal_fortran_integer2_t)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_HAVE_FORTRAN_INTEGER4
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -FUNC_FUNC(min, fortran_integer4, ompi_fortran_integer4_t)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_HAVE_FORTRAN_INTEGER4
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +FUNC_FUNC(min, fortran_integer4, opal_fortran_integer4_t)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_HAVE_FORTRAN_INTEGER8
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -FUNC_FUNC(min, fortran_integer8, ompi_fortran_integer8_t)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_HAVE_FORTRAN_INTEGER8
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +FUNC_FUNC(min, fortran_integer8, opal_fortran_integer8_t)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_HAVE_FORTRAN_INTEGER16
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -FUNC_FUNC(min, fortran_integer16, ompi_fortran_integer16_t)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_HAVE_FORTRAN_INTEGER16
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +FUNC_FUNC(min, fortran_integer16, opal_fortran_integer16_t)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  /* Floating point */
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  FUNC_FUNC(min, float, float)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -239,23 +239,23 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #if HAVE_LONG_DOUBLE
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  FUNC_FUNC(min, long_double, long double)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_HAVE_FORTRAN_REAL
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -FUNC_FUNC(min, fortran_real, ompi_fortran_real_t)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_HAVE_FORTRAN_REAL
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +FUNC_FUNC(min, fortran_real, opal_fortran_real_t)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_HAVE_FORTRAN_DOUBLE_PRECISION
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -FUNC_FUNC(min, fortran_double_precision,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ompi_fortran_double_precision_t)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_HAVE_FORTRAN_DOUBLE_PRECISION
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +FUNC_FUNC(min, fortran_double_precision,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; opal_fortran_double_precision_t)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_HAVE_FORTRAN_REAL2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -FUNC_FUNC(min, fortran_real2, ompi_fortran_real2_t)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_HAVE_FORTRAN_REAL2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +FUNC_FUNC(min, fortran_real2, opal_fortran_real2_t)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_HAVE_FORTRAN_REAL4
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -FUNC_FUNC(min, fortran_real4, ompi_fortran_real4_t)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_HAVE_FORTRAN_REAL4
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +FUNC_FUNC(min, fortran_real4, opal_fortran_real4_t)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_HAVE_FORTRAN_REAL8
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -FUNC_FUNC(min, fortran_real8, ompi_fortran_real8_t)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_HAVE_FORTRAN_REAL8
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +FUNC_FUNC(min, fortran_real8, opal_fortran_real8_t)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_HAVE_FORTRAN_REAL16
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -FUNC_FUNC(min, fortran_real16, ompi_fortran_real16_t)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_HAVE_FORTRAN_REAL16
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +FUNC_FUNC(min, fortran_real16, opal_fortran_real16_t)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  /
</span><br>
<span class="quotelev3">&gt;&gt;&gt; *************************************************************************
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -276,23 +276,23 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  OP_FUNC(sum, unsigned_long_long, unsigned long long, +=)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  /* Fortran integer */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_HAVE_FORTRAN_INTEGER
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -OP_FUNC(sum, fortran_integer, ompi_fortran_integer_t, +=)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_HAVE_FORTRAN_INTEGER
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +OP_FUNC(sum, fortran_integer, opal_fortran_integer_t, +=)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_HAVE_FORTRAN_INTEGER1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -OP_FUNC(sum, fortran_integer1, ompi_fortran_integer1_t, +=)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_HAVE_FORTRAN_INTEGER1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +OP_FUNC(sum, fortran_integer1, opal_fortran_integer1_t, +=)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_HAVE_FORTRAN_INTEGER2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -OP_FUNC(sum, fortran_integer2, ompi_fortran_integer2_t, +=)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_HAVE_FORTRAN_INTEGER2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +OP_FUNC(sum, fortran_integer2, opal_fortran_integer2_t, +=)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_HAVE_FORTRAN_INTEGER4
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -OP_FUNC(sum, fortran_integer4, ompi_fortran_integer4_t, +=)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_HAVE_FORTRAN_INTEGER4
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +OP_FUNC(sum, fortran_integer4, opal_fortran_integer4_t, +=)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_HAVE_FORTRAN_INTEGER8
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -OP_FUNC(sum, fortran_integer8, ompi_fortran_integer8_t, +=)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_HAVE_FORTRAN_INTEGER8
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +OP_FUNC(sum, fortran_integer8, opal_fortran_integer8_t, +=)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_HAVE_FORTRAN_INTEGER16
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -OP_FUNC(sum, fortran_integer16, ompi_fortran_integer16_t, +=)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_HAVE_FORTRAN_INTEGER16
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +OP_FUNC(sum, fortran_integer16, opal_fortran_integer16_t, +=)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  /* Floating point */
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  OP_FUNC(sum, float, float, +=)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -300,39 +300,39 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #if HAVE_LONG_DOUBLE
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  OP_FUNC(sum, long_double, long double, +=)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_HAVE_FORTRAN_REAL
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -OP_FUNC(sum, fortran_real, ompi_fortran_real_t, +=)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_HAVE_FORTRAN_REAL
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +OP_FUNC(sum, fortran_real, opal_fortran_real_t, +=)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_HAVE_FORTRAN_DOUBLE_PRECISION
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -OP_FUNC(sum, fortran_double_precision,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ompi_fortran_double_precision_t, +=)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_HAVE_FORTRAN_DOUBLE_PRECISION
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +OP_FUNC(sum, fortran_double_precision,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; opal_fortran_double_precision_t, +=)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_HAVE_FORTRAN_REAL2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -OP_FUNC(sum, fortran_real2, ompi_fortran_real2_t, +=)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_HAVE_FORTRAN_REAL2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +OP_FUNC(sum, fortran_real2, opal_fortran_real2_t, +=)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_HAVE_FORTRAN_REAL4
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -OP_FUNC(sum, fortran_real4, ompi_fortran_real4_t, +=)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_HAVE_FORTRAN_REAL4
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +OP_FUNC(sum, fortran_real4, opal_fortran_real4_t, +=)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_HAVE_FORTRAN_REAL8
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -OP_FUNC(sum, fortran_real8, ompi_fortran_real8_t, +=)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_HAVE_FORTRAN_REAL8
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +OP_FUNC(sum, fortran_real8, opal_fortran_real8_t, +=)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_HAVE_FORTRAN_REAL16
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -OP_FUNC(sum, fortran_real16, ompi_fortran_real16_t, +=)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_HAVE_FORTRAN_REAL16
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +OP_FUNC(sum, fortran_real16, opal_fortran_real16_t, +=)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  /* Complex */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_HAVE_FORTRAN_REAL &amp;&amp; OMPI_HAVE_FORTRAN_COMPLEX
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -COMPLEX_OP_FUNC_SUM(fortran_complex, ompi_fortran_complex_t)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_HAVE_FORTRAN_REAL &amp;&amp; OPAL_HAVE_FORTRAN_COMPLEX
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +COMPLEX_OP_FUNC_SUM(fortran_complex, opal_fortran_complex_t)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_HAVE_FORTRAN_DOUBLE_PRECISION &amp;&amp; OMPI_HAVE_FORTRAN_COMPLEX
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -COMPLEX_OP_FUNC_SUM(fortran_double_complex,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ompi_fortran_double_complex_t)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_HAVE_FORTRAN_DOUBLE_PRECISION &amp;&amp; OPAL_HAVE_FORTRAN_COMPLEX
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +COMPLEX_OP_FUNC_SUM(fortran_double_complex,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; opal_fortran_double_complex_t)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_HAVE_FORTRAN_REAL4 &amp;&amp; OMPI_HAVE_FORTRAN_COMPLEX8
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -COMPLEX_OP_FUNC_SUM(fortran_complex8, ompi_fortran_complex8_t)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_HAVE_FORTRAN_REAL4 &amp;&amp; OPAL_HAVE_FORTRAN_COMPLEX8
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +COMPLEX_OP_FUNC_SUM(fortran_complex8, opal_fortran_complex8_t)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_HAVE_FORTRAN_REAL8 &amp;&amp; OMPI_HAVE_FORTRAN_COMPLEX16
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -COMPLEX_OP_FUNC_SUM(fortran_complex16, ompi_fortran_complex16_t)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_HAVE_FORTRAN_REAL8 &amp;&amp; OPAL_HAVE_FORTRAN_COMPLEX16
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +COMPLEX_OP_FUNC_SUM(fortran_complex16, opal_fortran_complex16_t)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_HAVE_FORTRAN_REAL16 &amp;&amp; OMPI_HAVE_FORTRAN_COMPLEX32
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -COMPLEX_OP_FUNC_SUM(fortran_complex32, ompi_fortran_complex32_t)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_HAVE_FORTRAN_REAL16 &amp;&amp; OPAL_HAVE_FORTRAN_COMPLEX32
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +COMPLEX_OP_FUNC_SUM(fortran_complex32, opal_fortran_complex32_t)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  /
</span><br>
<span class="quotelev3">&gt;&gt;&gt; *************************************************************************
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -353,23 +353,23 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  OP_FUNC(prod, unsigned_long_long, unsigned long long, *=)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  /* Fortran integer */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_HAVE_FORTRAN_INTEGER
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -OP_FUNC(prod, fortran_integer, ompi_fortran_integer_t, *=)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_HAVE_FORTRAN_INTEGER
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +OP_FUNC(prod, fortran_integer, opal_fortran_integer_t, *=)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_HAVE_FORTRAN_INTEGER1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -OP_FUNC(prod, fortran_integer1, ompi_fortran_integer1_t, *=)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_HAVE_FORTRAN_INTEGER1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +OP_FUNC(prod, fortran_integer1, opal_fortran_integer1_t, *=)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_HAVE_FORTRAN_INTEGER2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -OP_FUNC(prod, fortran_integer2, ompi_fortran_integer2_t, *=)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_HAVE_FORTRAN_INTEGER2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +OP_FUNC(prod, fortran_integer2, opal_fortran_integer2_t, *=)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_HAVE_FORTRAN_INTEGER4
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -OP_FUNC(prod, fortran_integer4, ompi_fortran_integer4_t, *=)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_HAVE_FORTRAN_INTEGER4
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +OP_FUNC(prod, fortran_integer4, opal_fortran_integer4_t, *=)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_HAVE_FORTRAN_INTEGER8
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -OP_FUNC(prod, fortran_integer8, ompi_fortran_integer8_t, *=)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_HAVE_FORTRAN_INTEGER8
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +OP_FUNC(prod, fortran_integer8, opal_fortran_integer8_t, *=)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_HAVE_FORTRAN_INTEGER16
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -OP_FUNC(prod, fortran_integer16, ompi_fortran_integer16_t, *=)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_HAVE_FORTRAN_INTEGER16
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +OP_FUNC(prod, fortran_integer16, opal_fortran_integer16_t, *=)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  /* Floating point */
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  OP_FUNC(prod, float, float, *=)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -377,39 +377,39 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #if HAVE_LONG_DOUBLE
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  OP_FUNC(prod, long_double, long double, *=)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_HAVE_FORTRAN_REAL
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -OP_FUNC(prod, fortran_real, ompi_fortran_real_t, *=)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_HAVE_FORTRAN_REAL
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +OP_FUNC(prod, fortran_real, opal_fortran_real_t, *=)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_HAVE_FORTRAN_DOUBLE_PRECISION
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -OP_FUNC(prod, fortran_double_precision,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ompi_fortran_double_precision_t, *=)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_HAVE_FORTRAN_DOUBLE_PRECISION
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +OP_FUNC(prod, fortran_double_precision,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; opal_fortran_double_precision_t, *=)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_HAVE_FORTRAN_REAL2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -OP_FUNC(prod, fortran_real2, ompi_fortran_real2_t, *=)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_HAVE_FORTRAN_REAL2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +OP_FUNC(prod, fortran_real2, opal_fortran_real2_t, *=)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_HAVE_FORTRAN_REAL4
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -OP_FUNC(prod, fortran_real4, ompi_fortran_real4_t, *=)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_HAVE_FORTRAN_REAL4
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +OP_FUNC(prod, fortran_real4, opal_fortran_real4_t, *=)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_HAVE_FORTRAN_REAL8
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -OP_FUNC(prod, fortran_real8, ompi_fortran_real8_t, *=)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_HAVE_FORTRAN_REAL8
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +OP_FUNC(prod, fortran_real8, opal_fortran_real8_t, *=)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_HAVE_FORTRAN_REAL16
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -OP_FUNC(prod, fortran_real16, ompi_fortran_real16_t, *=)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_HAVE_FORTRAN_REAL16
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +OP_FUNC(prod, fortran_real16, opal_fortran_real16_t, *=)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  /* Complex */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_HAVE_FORTRAN_REAL &amp;&amp; OMPI_HAVE_FORTRAN_COMPLEX
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -COMPLEX_OP_FUNC_PROD(fortran_complex, ompi_fortran_complex_t)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_HAVE_FORTRAN_REAL &amp;&amp; OPAL_HAVE_FORTRAN_COMPLEX
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +COMPLEX_OP_FUNC_PROD(fortran_complex, opal_fortran_complex_t)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_HAVE_FORTRAN_DOUBLE_PRECISION &amp;&amp; OMPI_HAVE_FORTRAN_COMPLEX
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -COMPLEX_OP_FUNC_PROD(fortran_double_complex,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ompi_fortran_double_complex_t)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_HAVE_FORTRAN_DOUBLE_PRECISION &amp;&amp; OPAL_HAVE_FORTRAN_COMPLEX
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +COMPLEX_OP_FUNC_PROD(fortran_double_complex,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; opal_fortran_double_complex_t)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_HAVE_FORTRAN_REAL4 &amp;&amp; OMPI_HAVE_FORTRAN_COMPLEX8
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -COMPLEX_OP_FUNC_PROD(fortran_complex8, ompi_fortran_complex8_t)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_HAVE_FORTRAN_REAL4 &amp;&amp; OPAL_HAVE_FORTRAN_COMPLEX8
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +COMPLEX_OP_FUNC_PROD(fortran_complex8, opal_fortran_complex8_t)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_HAVE_FORTRAN_REAL8 &amp;&amp; OMPI_HAVE_FORTRAN_COMPLEX16
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -COMPLEX_OP_FUNC_PROD(fortran_complex16, ompi_fortran_complex16_t)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_HAVE_FORTRAN_REAL8 &amp;&amp; OPAL_HAVE_FORTRAN_COMPLEX16
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +COMPLEX_OP_FUNC_PROD(fortran_complex16, opal_fortran_complex16_t)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_HAVE_FORTRAN_REAL16 &amp;&amp; OMPI_HAVE_FORTRAN_COMPLEX32
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -COMPLEX_OP_FUNC_PROD(fortran_complex32, ompi_fortran_complex32_t)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_HAVE_FORTRAN_REAL16 &amp;&amp; OPAL_HAVE_FORTRAN_COMPLEX32
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +COMPLEX_OP_FUNC_PROD(fortran_complex32, opal_fortran_complex32_t)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  /
</span><br>
<span class="quotelev3">&gt;&gt;&gt; *************************************************************************
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -432,8 +432,8 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  FUNC_FUNC(land, unsigned_long_long, unsigned long long)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  /* Logical */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_HAVE_FORTRAN_LOGICAL
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -FUNC_FUNC(land, fortran_logical, ompi_fortran_logical_t)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_HAVE_FORTRAN_LOGICAL
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +FUNC_FUNC(land, fortran_logical, opal_fortran_logical_t)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  /* C++ bool */
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  FUNC_FUNC(land, bool, bool)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -458,8 +458,8 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  FUNC_FUNC(lor, unsigned_long_long, unsigned long long)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  /* Logical */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_HAVE_FORTRAN_LOGICAL
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -FUNC_FUNC(lor, fortran_logical, ompi_fortran_logical_t)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_HAVE_FORTRAN_LOGICAL
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +FUNC_FUNC(lor, fortran_logical, opal_fortran_logical_t)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  /* C++ bool */
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  FUNC_FUNC(lor, bool, bool)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -484,8 +484,8 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  FUNC_FUNC(lxor, unsigned_long_long, unsigned long long)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  /* Logical */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_HAVE_FORTRAN_LOGICAL
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -FUNC_FUNC(lxor, fortran_logical, ompi_fortran_logical_t)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_HAVE_FORTRAN_LOGICAL
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +FUNC_FUNC(lxor, fortran_logical, opal_fortran_logical_t)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  /* C++ bool */
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  FUNC_FUNC(lxor, bool, bool)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -510,23 +510,23 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  FUNC_FUNC(band, unsigned_long_long, unsigned long long)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  /* Fortran integer */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_HAVE_FORTRAN_INTEGER
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -FUNC_FUNC(band, fortran_integer, ompi_fortran_integer_t)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_HAVE_FORTRAN_INTEGER
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +FUNC_FUNC(band, fortran_integer, opal_fortran_integer_t)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_HAVE_FORTRAN_INTEGER1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -FUNC_FUNC(band, fortran_integer1, ompi_fortran_integer1_t)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_HAVE_FORTRAN_INTEGER1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +FUNC_FUNC(band, fortran_integer1, opal_fortran_integer1_t)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_HAVE_FORTRAN_INTEGER2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -FUNC_FUNC(band, fortran_integer2, ompi_fortran_integer2_t)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_HAVE_FORTRAN_INTEGER2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +FUNC_FUNC(band, fortran_integer2, opal_fortran_integer2_t)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_HAVE_FORTRAN_INTEGER4
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -FUNC_FUNC(band, fortran_integer4, ompi_fortran_integer4_t)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_HAVE_FORTRAN_INTEGER4
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +FUNC_FUNC(band, fortran_integer4, opal_fortran_integer4_t)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_HAVE_FORTRAN_INTEGER8
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -FUNC_FUNC(band, fortran_integer8, ompi_fortran_integer8_t)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_HAVE_FORTRAN_INTEGER8
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +FUNC_FUNC(band, fortran_integer8, opal_fortran_integer8_t)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_HAVE_FORTRAN_INTEGER16
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -FUNC_FUNC(band, fortran_integer16, ompi_fortran_integer16_t)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_HAVE_FORTRAN_INTEGER16
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +FUNC_FUNC(band, fortran_integer16, opal_fortran_integer16_t)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  /* Byte */
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  FUNC_FUNC(band, byte, char)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -551,23 +551,23 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  FUNC_FUNC(bor, unsigned_long_long, unsigned long long)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  /* Fortran integer */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_HAVE_FORTRAN_INTEGER
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -FUNC_FUNC(bor, fortran_integer, ompi_fortran_integer_t)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_HAVE_FORTRAN_INTEGER
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +FUNC_FUNC(bor, fortran_integer, opal_fortran_integer_t)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_HAVE_FORTRAN_INTEGER1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -FUNC_FUNC(bor, fortran_integer1, ompi_fortran_integer1_t)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_HAVE_FORTRAN_INTEGER1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +FUNC_FUNC(bor, fortran_integer1, opal_fortran_integer1_t)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_HAVE_FORTRAN_INTEGER2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -FUNC_FUNC(bor, fortran_integer2, ompi_fortran_integer2_t)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_HAVE_FORTRAN_INTEGER2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +FUNC_FUNC(bor, fortran_integer2, opal_fortran_integer2_t)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_HAVE_FORTRAN_INTEGER4
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -FUNC_FUNC(bor, fortran_integer4, ompi_fortran_integer4_t)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_HAVE_FORTRAN_INTEGER4
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +FUNC_FUNC(bor, fortran_integer4, opal_fortran_integer4_t)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_HAVE_FORTRAN_INTEGER8
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -FUNC_FUNC(bor, fortran_integer8, ompi_fortran_integer8_t)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_HAVE_FORTRAN_INTEGER8
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +FUNC_FUNC(bor, fortran_integer8, opal_fortran_integer8_t)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_HAVE_FORTRAN_INTEGER16
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -FUNC_FUNC(bor, fortran_integer16, ompi_fortran_integer16_t)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_HAVE_FORTRAN_INTEGER16
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +FUNC_FUNC(bor, fortran_integer16, opal_fortran_integer16_t)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  /* Byte */
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  FUNC_FUNC(bor, byte, char)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -592,23 +592,23 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  FUNC_FUNC(bxor, unsigned_long_long, unsigned long long)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  /* Fortran integer */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_HAVE_FORTRAN_INTEGER
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -FUNC_FUNC(bxor, fortran_integer, ompi_fortran_integer_t)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_HAVE_FORTRAN_INTEGER
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +FUNC_FUNC(bxor, fortran_integer, opal_fortran_integer_t)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_HAVE_FORTRAN_INTEGER1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -FUNC_FUNC(bxor, fortran_integer1, ompi_fortran_integer1_t)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_HAVE_FORTRAN_INTEGER1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +FUNC_FUNC(bxor, fortran_integer1, opal_fortran_integer1_t)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_HAVE_FORTRAN_INTEGER2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -FUNC_FUNC(bxor, fortran_integer2, ompi_fortran_integer2_t)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_HAVE_FORTRAN_INTEGER2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +FUNC_FUNC(bxor, fortran_integer2, opal_fortran_integer2_t)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_HAVE_FORTRAN_INTEGER4
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -FUNC_FUNC(bxor, fortran_integer4, ompi_fortran_integer4_t)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_HAVE_FORTRAN_INTEGER4
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +FUNC_FUNC(bxor, fortran_integer4, opal_fortran_integer4_t)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_HAVE_FORTRAN_INTEGER8
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -FUNC_FUNC(bxor, fortran_integer8, ompi_fortran_integer8_t)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_HAVE_FORTRAN_INTEGER8
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +FUNC_FUNC(bxor, fortran_integer8, opal_fortran_integer8_t)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_HAVE_FORTRAN_INTEGER16
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -FUNC_FUNC(bxor, fortran_integer16, ompi_fortran_integer16_t)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_HAVE_FORTRAN_INTEGER16
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +FUNC_FUNC(bxor, fortran_integer16, opal_fortran_integer16_t)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  /* Byte */
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  FUNC_FUNC(bxor, byte, char)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -617,14 +617,14 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   * Min and max location &quot;pair&quot; datatypes
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; *************************************************************************
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_HAVE_FORTRAN_REAL
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -LOC_STRUCT(2real, ompi_fortran_real_t, ompi_fortran_real_t)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_HAVE_FORTRAN_REAL
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +LOC_STRUCT(2real, opal_fortran_real_t, opal_fortran_real_t)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_HAVE_FORTRAN_DOUBLE_PRECISION
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -LOC_STRUCT(2double_precision, ompi_fortran_double_precision_t,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ompi_fortran_double_precision_t)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_HAVE_FORTRAN_DOUBLE_PRECISION
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +LOC_STRUCT(2double_precision, opal_fortran_double_precision_t,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; opal_fortran_double_precision_t)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_HAVE_FORTRAN_INTEGER
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -LOC_STRUCT(2integer, ompi_fortran_integer_t, ompi_fortran_integer_t)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_HAVE_FORTRAN_INTEGER
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +LOC_STRUCT(2integer, opal_fortran_integer_t, opal_fortran_integer_t)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  LOC_STRUCT(float_int, float, int)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  LOC_STRUCT(double_int, double, int)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -639,13 +639,13 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   * Max location
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; *************************************************************************
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_HAVE_FORTRAN_REAL
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_HAVE_FORTRAN_REAL
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  LOC_FUNC(maxloc, 2real, &gt;)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_HAVE_FORTRAN_DOUBLE_PRECISION
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_HAVE_FORTRAN_DOUBLE_PRECISION
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  LOC_FUNC(maxloc, 2double_precision, &gt;)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_HAVE_FORTRAN_INTEGER
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_HAVE_FORTRAN_INTEGER
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  LOC_FUNC(maxloc, 2integer, &gt;)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  LOC_FUNC(maxloc, float_int, &gt;)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -661,13 +661,13 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   * Min location
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; *************************************************************************
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_HAVE_FORTRAN_REAL
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_HAVE_FORTRAN_REAL
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  LOC_FUNC(minloc, 2real, &lt;)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_HAVE_FORTRAN_DOUBLE_PRECISION
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_HAVE_FORTRAN_DOUBLE_PRECISION
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  LOC_FUNC(minloc, 2double_precision, &lt;)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_HAVE_FORTRAN_INTEGER
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_HAVE_FORTRAN_INTEGER
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  LOC_FUNC(minloc, 2integer, &lt;)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  LOC_FUNC(minloc, float_int, &lt;)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -816,23 +816,23 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  FUNC_FUNC_3BUF(max, unsigned_long_long, unsigned long long)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  /* Fortran integer */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_HAVE_FORTRAN_INTEGER
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -FUNC_FUNC_3BUF(max, fortran_integer, ompi_fortran_integer_t)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_HAVE_FORTRAN_INTEGER
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +FUNC_FUNC_3BUF(max, fortran_integer, opal_fortran_integer_t)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_HAVE_FORTRAN_INTEGER1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -FUNC_FUNC_3BUF(max, fortran_integer1, ompi_fortran_integer1_t)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_HAVE_FORTRAN_INTEGER1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +FUNC_FUNC_3BUF(max, fortran_integer1, opal_fortran_integer1_t)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_HAVE_FORTRAN_INTEGER2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -FUNC_FUNC_3BUF(max, fortran_integer2, ompi_fortran_integer2_t)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_HAVE_FORTRAN_INTEGER2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +FUNC_FUNC_3BUF(max, fortran_integer2, opal_fortran_integer2_t)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_HAVE_FORTRAN_INTEGER4
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -FUNC_FUNC_3BUF(max, fortran_integer4, ompi_fortran_integer4_t)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_HAVE_FORTRAN_INTEGER4
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +FUNC_FUNC_3BUF(max, fortran_integer4, opal_fortran_integer4_t)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_HAVE_FORTRAN_INTEGER8
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -FUNC_FUNC_3BUF(max, fortran_integer8, ompi_fortran_integer8_t)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_HAVE_FORTRAN_INTEGER8
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +FUNC_FUNC_3BUF(max, fortran_integer8, opal_fortran_integer8_t)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_HAVE_FORTRAN_INTEGER16
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -FUNC_FUNC_3BUF(max, fortran_integer16, ompi_fortran_integer16_t)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_HAVE_FORTRAN_INTEGER16
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +FUNC_FUNC_3BUF(max, fortran_integer16, opal_fortran_integer16_t)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  /* Floating point */
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  FUNC_FUNC_3BUF(max, float, float)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -840,23 +840,23 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #if HAVE_LONG_DOUBLE
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  FUNC_FUNC_3BUF(max, long_double, long double)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_HAVE_FORTRAN_REAL
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -FUNC_FUNC_3BUF(max, fortran_real, ompi_fortran_real_t)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_HAVE_FORTRAN_REAL
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +FUNC_FUNC_3BUF(max, fortran_real, opal_fortran_real_t)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_HAVE_FORTRAN_DOUBLE_PRECISION
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -FUNC_FUNC_3BUF(max, fortran_double_precision,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ompi_fortran_double_precision_t)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_HAVE_FORTRAN_DOUBLE_PRECISION
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +FUNC_FUNC_3BUF(max, fortran_double_precision,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; opal_fortran_double_precision_t)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_HAVE_FORTRAN_REAL2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -FUNC_FUNC_3BUF(max, fortran_real2, ompi_fortran_real2_t)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_HAVE_FORTRAN_REAL2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +FUNC_FUNC_3BUF(max, fortran_real2, opal_fortran_real2_t)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_HAVE_FORTRAN_REAL4
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -FUNC_FUNC_3BUF(max, fortran_real4, ompi_fortran_real4_t)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_HAVE_FORTRAN_REAL4
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +FUNC_FUNC_3BUF(max, fortran_real4, opal_fortran_real4_t)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_HAVE_FORTRAN_REAL8
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -FUNC_FUNC_3BUF(max, fortran_real8, ompi_fortran_real8_t)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_HAVE_FORTRAN_REAL8
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +FUNC_FUNC_3BUF(max, fortran_real8, opal_fortran_real8_t)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_HAVE_FORTRAN_REAL16
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -FUNC_FUNC_3BUF(max, fortran_real16, ompi_fortran_real16_t)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_HAVE_FORTRAN_REAL16
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +FUNC_FUNC_3BUF(max, fortran_real16, opal_fortran_real16_t)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -880,23 +880,23 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  FUNC_FUNC_3BUF(min, unsigned_long_long, unsigned long long)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  /* Fortran integer */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_HAVE_FORTRAN_INTEGER
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -FUNC_FUNC_3BUF(min, fortran_integer, ompi_fortran_integer_t)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_HAVE_FORTRAN_INTEGER
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +FUNC_FUNC_3BUF(min, fortran_integer, opal_fortran_integer_t)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_HAVE_FORTRAN_INTEGER1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -FUNC_FUNC_3BUF(min, fortran_integer1, ompi_fortran_integer1_t)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_HAVE_FORTRAN_INTEGER1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +FUNC_FUNC_3BUF(min, fortran_integer1, opal_fortran_integer1_t)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_HAVE_FORTRAN_INTEGER2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -FUNC_FUNC_3BUF(min, fortran_integer2, ompi_fortran_integer2_t)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_HAVE_FORTRAN_INTEGER2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +FUNC_FUNC_3BUF(min, fortran_integer2, opal_fortran_integer2_t)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_HAVE_FORTRAN_INTEGER4
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -FUNC_FUNC_3BUF(min, fortran_integer4, ompi_fortran_integer4_t)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_HAVE_FORTRAN_INTEGER4
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +FUNC_FUNC_3BUF(min, fortran_integer4, opal_fortran_integer4_t)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_HAVE_FORTRAN_INTEGER8
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -FUNC_FUNC_3BUF(min, fortran_integer8, ompi_fortran_integer8_t)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_HAVE_FORTRAN_INTEGER8
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +FUNC_FUNC_3BUF(min, fortran_integer8, opal_fortran_integer8_t)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_HAVE_FORTRAN_INTEGER16
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -FUNC_FUNC_3BUF(min, fortran_integer16, ompi_fortran_integer16_t)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_HAVE_FORTRAN_INTEGER16
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +FUNC_FUNC_3BUF(min, fortran_integer16, opal_fortran_integer16_t)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  /* Floating point */
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  FUNC_FUNC_3BUF(min, float, float)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -904,23 +904,23 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #if HAVE_LONG_DOUBLE
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  FUNC_FUNC_3BUF(min, long_double, long double)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_HAVE_FORTRAN_REAL
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -FUNC_FUNC_3BUF(min, fortran_real, ompi_fortran_real_t)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_HAVE_FORTRAN_REAL
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +FUNC_FUNC_3BUF(min, fortran_real, opal_fortran_real_t)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_HAVE_FORTRAN_DOUBLE_PRECISION
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -FUNC_FUNC_3BUF(min, fortran_double_precision,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ompi_fortran_double_precision_t)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_HAVE_FORTRAN_DOUBLE_PRECISION
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +FUNC_FUNC_3BUF(min, fortran_double_precision,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; opal_fortran_double_precision_t)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_HAVE_FORTRAN_REAL2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -FUNC_FUNC_3BUF(min, fortran_real2, ompi_fortran_real2_t)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_HAVE_FORTRAN_REAL2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +FUNC_FUNC_3BUF(min, fortran_real2, opal_fortran_real2_t)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_HAVE_FORTRAN_REAL4
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -FUNC_FUNC_3BUF(min, fortran_real4, ompi_fortran_real4_t)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_HAVE_FORTRAN_REAL4
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +FUNC_FUNC_3BUF(min, fortran_real4, opal_fortran_real4_t)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_HAVE_FORTRAN_REAL8
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -FUNC_FUNC_3BUF(min, fortran_real8, ompi_fortran_real8_t)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_HAVE_FORTRAN_REAL8
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +FUNC_FUNC_3BUF(min, fortran_real8, opal_fortran_real8_t)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_HAVE_FORTRAN_REAL16
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -FUNC_FUNC_3BUF(min, fortran_real16, ompi_fortran_real16_t)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_HAVE_FORTRAN_REAL16
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +FUNC_FUNC_3BUF(min, fortran_real16, opal_fortran_real16_t)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  /
</span><br>
<span class="quotelev3">&gt;&gt;&gt; *************************************************************************
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -941,23 +941,23 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  OP_FUNC_3BUF(sum, unsigned_long_long, unsigned long long, +)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  /* Fortran integer */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_HAVE_FORTRAN_INTEGER
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -OP_FUNC_3BUF(sum, fortran_integer, ompi_fortran_integer_t, +)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_HAVE_FORTRAN_INTEGER
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +OP_FUNC_3BUF(sum, fortran_integer, opal_fortran_integer_t, +)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_HAVE_FORTRAN_INTEGER1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -OP_FUNC_3BUF(sum, fortran_integer1, ompi_fortran_integer1_t, +)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_HAVE_FORTRAN_INTEGER1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +OP_FUNC_3BUF(sum, fortran_integer1, opal_fortran_integer1_t, +)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_HAVE_FORTRAN_INTEGER2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -OP_FUNC_3BUF(sum, fortran_integer2, ompi_fortran_integer2_t, +)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_HAVE_FORTRAN_INTEGER2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +OP_FUNC_3BUF(sum, fortran_integer2, opal_fortran_integer2_t, +)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_HAVE_FORTRAN_INTEGER4
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -OP_FUNC_3BUF(sum, fortran_integer4, ompi_fortran_integer4_t, +)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_HAVE_FORTRAN_INTEGER4
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +OP_FUNC_3BUF(sum, fortran_integer4, opal_fortran_integer4_t, +)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_HAVE_FORTRAN_INTEGER8
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -OP_FUNC_3BUF(sum, fortran_integer8, ompi_fortran_integer8_t, +)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_HAVE_FORTRAN_INTEGER8
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +OP_FUNC_3BUF(sum, fortran_integer8, opal_fortran_integer8_t, +)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_HAVE_FORTRAN_INTEGER16
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -OP_FUNC_3BUF(sum, fortran_integer16, ompi_fortran_integer16_t, +)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_HAVE_FORTRAN_INTEGER16
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +OP_FUNC_3BUF(sum, fortran_integer16, opal_fortran_integer16_t, +)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  /* Floating point */
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  OP_FUNC_3BUF(sum, float, float, +)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -965,39 +965,39 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #if HAVE_LONG_DOUBLE
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  OP_FUNC_3BUF(sum, long_double, long double, +)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_HAVE_FORTRAN_REAL
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -OP_FUNC_3BUF(sum, fortran_real, ompi_fortran_real_t, +)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_HAVE_FORTRAN_REAL
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +OP_FUNC_3BUF(sum, fortran_real, opal_fortran_real_t, +)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_HAVE_FORTRAN_DOUBLE_PRECISION
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -OP_FUNC_3BUF(sum, fortran_double_precision,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ompi_fortran_double_precision_t, +)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_HAVE_FORTRAN_DOUBLE_PRECISION
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +OP_FUNC_3BUF(sum, fortran_double_precision,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; opal_fortran_double_precision_t, +)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_HAVE_FORTRAN_REAL2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -OP_FUNC_3BUF(sum, fortran_real2, ompi_fortran_real2_t, +)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_HAVE_FORTRAN_REAL2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +OP_FUNC_3BUF(sum, fortran_real2, opal_fortran_real2_t, +)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_HAVE_FORTRAN_REAL4
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -OP_FUNC_3BUF(sum, fortran_real4, ompi_fortran_real4_t, +)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_HAVE_FORTRAN_REAL4
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +OP_FUNC_3BUF(sum, fortran_real4, opal_fortran_real4_t, +)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_HAVE_FORTRAN_REAL8
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -OP_FUNC_3BUF(sum, fortran_real8, ompi_fortran_real8_t, +)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_HAVE_FORTRAN_REAL8
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +OP_FUNC_3BUF(sum, fortran_real8, opal_fortran_real8_t, +)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_HAVE_FORTRAN_REAL16
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -OP_FUNC_3BUF(sum, fortran_real16, ompi_fortran_real16_t, +)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_HAVE_FORTRAN_REAL16
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +OP_FUNC_3BUF(sum, fortran_real16, opal_fortran_real16_t, +)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  /* Complex */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_HAVE_FORTRAN_REAL &amp;&amp; OMPI_HAVE_FORTRAN_COMPLEX
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -COMPLEX_OP_FUNC_SUM_3BUF(fortran_complex, ompi_fortran_complex_t)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_HAVE_FORTRAN_REAL &amp;&amp; OPAL_HAVE_FORTRAN_COMPLEX
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +COMPLEX_OP_FUNC_SUM_3BUF(fortran_complex, opal_fortran_complex_t)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_HAVE_FORTRAN_DOUBLE_PRECISION &amp;&amp; OMPI_HAVE_FORTRAN_COMPLEX
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -COMPLEX_OP_FUNC_SUM_3BUF(fortran_double_complex,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ompi_fortran_double_complex_t)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_HAVE_FORTRAN_DOUBLE_PRECISION &amp;&amp; OPAL_HAVE_FORTRAN_COMPLEX
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +COMPLEX_OP_FUNC_SUM_3BUF(fortran_double_complex,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; opal_fortran_double_complex_t)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_HAVE_FORTRAN_REAL4 &amp;&amp; OMPI_HAVE_FORTRAN_COMPLEX8
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -COMPLEX_OP_FUNC_SUM_3BUF(fortran_complex8, ompi_fortran_complex8_t)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_HAVE_FORTRAN_REAL4 &amp;&amp; OPAL_HAVE_FORTRAN_COMPLEX8
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +COMPLEX_OP_FUNC_SUM_3BUF(fortran_complex8, opal_fortran_complex8_t)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_HAVE_FORTRAN_REAL8 &amp;&amp; OMPI_HAVE_FORTRAN_COMPLEX16
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -COMPLEX_OP_FUNC_SUM_3BUF(fortran_complex16, ompi_fortran_complex16_t)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_HAVE_FORTRAN_REAL8 &amp;&amp; OPAL_HAVE_FORTRAN_COMPLEX16
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +COMPLEX_OP_FUNC_SUM_3BUF(fortran_complex16, opal_fortran_complex16_t)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_HAVE_FORTRAN_REAL16 &amp;&amp; OMPI_HAVE_FORTRAN_COMPLEX32
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -COMPLEX_OP_FUNC_SUM_3BUF(fortran_complex32, ompi_fortran_complex32_t)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_HAVE_FORTRAN_REAL16 &amp;&amp; OPAL_HAVE_FORTRAN_COMPLEX32
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +COMPLEX_OP_FUNC_SUM_3BUF(fortran_complex32, opal_fortran_complex32_t)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  /
</span><br>
<span class="quotelev3">&gt;&gt;&gt; *************************************************************************
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -1018,23 +1018,23 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  OP_FUNC_3BUF(prod, unsigned_long_long, unsigned long long, *)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  /* Fortran integer */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_HAVE_FORTRAN_INTEGER
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -OP_FUNC_3BUF(prod, fortran_integer, ompi_fortran_integer_t, *)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_HAVE_FORTRAN_INTEGER
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +OP_FUNC_3BUF(prod, fortran_integer, opal_fortran_integer_t, *)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_HAVE_FORTRAN_INTEGER1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -OP_FUNC_3BUF(prod, fortran_integer1, ompi_fortran_integer1_t, *)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_HAVE_FORTRAN_INTEGER1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +OP_FUNC_3BUF(prod, fortran_integer1, opal_fortran_integer1_t, *)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_HAVE_FORTRAN_INTEGER2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -OP_FUNC_3BUF(prod, fortran_integer2, ompi_fortran_integer2_t, *)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_HAVE_FORTRAN_INTEGER2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +OP_FUNC_3BUF(prod, fortran_integer2, opal_fortran_integer2_t, *)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_HAVE_FORTRAN_INTEGER4
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -OP_FUNC_3BUF(prod, fortran_integer4, ompi_fortran_integer4_t, *)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_HAVE_FORTRAN_INTEGER4
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +OP_FUNC_3BUF(prod, fortran_integer4, opal_fortran_integer4_t, *)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_HAVE_FORTRAN_INTEGER8
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -OP_FUNC_3BUF(prod, fortran_integer8, ompi_fortran_integer8_t, *)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_HAVE_FORTRAN_INTEGER8
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +OP_FUNC_3BUF(prod, fortran_integer8, opal_fortran_integer8_t, *)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_HAVE_FORTRAN_INTEGER16
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -OP_FUNC_3BUF(prod, fortran_integer16, ompi_fortran_integer16_t, *)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_HAVE_FORTRAN_INTEGER16
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +OP_FUNC_3BUF(prod, fortran_integer16, opal_fortran_integer16_t, *)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  /* Floating point */
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  OP_FUNC_3BUF(prod, float, float, *)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -1042,39 +1042,39 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #if HAVE_LONG_DOUBLE
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  OP_FUNC_3BUF(prod, long_double, long double, *)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_HAVE_FORTRAN_REAL
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -OP_FUNC_3BUF(prod, fortran_real, ompi_fortran_real_t, *)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_HAVE_FORTRAN_REAL
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +OP_FUNC_3BUF(prod, fortran_real, opal_fortran_real_t, *)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_HAVE_FORTRAN_DOUBLE_PRECISION
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -OP_FUNC_3BUF(prod, fortran_double_precision,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ompi_fortran_double_precision_t, *)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_HAVE_FORTRAN_DOUBLE_PRECISION
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +OP_FUNC_3BUF(prod, fortran_double_precision,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; opal_fortran_double_precision_t, *)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_HAVE_FORTRAN_REAL2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -OP_FUNC_3BUF(prod, fortran_real2, ompi_fortran_real2_t, *)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_HAVE_FORTRAN_REAL2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +OP_FUNC_3BUF(prod, fortran_real2, opal_fortran_real2_t, *)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_HAVE_FORTRAN_REAL4
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -OP_FUNC_3BUF(prod, fortran_real4, ompi_fortran_real4_t, *)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_HAVE_FORTRAN_REAL4
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +OP_FUNC_3BUF(prod, fortran_real4, opal_fortran_real4_t, *)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_HAVE_FORTRAN_REAL8
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -OP_FUNC_3BUF(prod, fortran_real8, ompi_fortran_real8_t, *)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_HAVE_FORTRAN_REAL8
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +OP_FUNC_3BUF(prod, fortran_real8, opal_fortran_real8_t, *)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_HAVE_FORTRAN_REAL16
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -OP_FUNC_3BUF(prod, fortran_real16, ompi_fortran_real16_t, *)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_HAVE_FORTRAN_REAL16
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +OP_FUNC_3BUF(prod, fortran_real16, opal_fortran_real16_t, *)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  /* Complex */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_HAVE_FORTRAN_REAL &amp;&amp; OMPI_HAVE_FORTRAN_COMPLEX
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -COMPLEX_OP_FUNC_PROD_3BUF(fortran_complex, ompi_fortran_complex_t)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_HAVE_FORTRAN_REAL &amp;&amp; OPAL_HAVE_FORTRAN_COMPLEX
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +COMPLEX_OP_FUNC_PROD_3BUF(fortran_complex, opal_fortran_complex_t)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_HAVE_FORTRAN_DOUBLE_PRECISION &amp;&amp; OMPI_HAVE_FORTRAN_COMPLEX
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -COMPLEX_OP_FUNC_PROD_3BUF(fortran_double_complex,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ompi_fortran_double_complex_t)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_HAVE_FORTRAN_DOUBLE_PRECISION &amp;&amp; OPAL_HAVE_FORTRAN_COMPLEX
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +COMPLEX_OP_FUNC_PROD_3BUF(fortran_double_complex,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; opal_fortran_double_complex_t)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_HAVE_FORTRAN_REAL4 &amp;&amp; OMPI_HAVE_FORTRAN_COMPLEX8
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -COMPLEX_OP_FUNC_PROD_3BUF(fortran_complex8, ompi_fortran_complex8_t)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_HAVE_FORTRAN_REAL4 &amp;&amp; OPAL_HAVE_FORTRAN_COMPLEX8
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +COMPLEX_OP_FUNC_PROD_3BUF(fortran_complex8, opal_fortran_complex8_t)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_HAVE_FORTRAN_REAL8 &amp;&amp; OMPI_HAVE_FORTRAN_COMPLEX16
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -COMPLEX_OP_FUNC_PROD_3BUF(fortran_complex16,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ompi_fortran_complex16_t)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_HAVE_FORTRAN_REAL8 &amp;&amp; OPAL_HAVE_FORTRAN_COMPLEX16
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +COMPLEX_OP_FUNC_PROD_3BUF(fortran_complex16,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; opal_fortran_complex16_t)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_HAVE_FORTRAN_REAL16 &amp;&amp; OMPI_HAVE_FORTRAN_COMPLEX32
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -COMPLEX_OP_FUNC_PROD_3BUF(fortran_complex32,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ompi_fortran_complex32_t)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_HAVE_FORTRAN_REAL16 &amp;&amp; OPAL_HAVE_FORTRAN_COMPLEX32
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +COMPLEX_OP_FUNC_PROD_3BUF(fortran_complex32,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; opal_fortran_complex32_t)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  /
</span><br>
<span class="quotelev3">&gt;&gt;&gt; *************************************************************************
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -1097,8 +1097,8 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  FUNC_FUNC_3BUF(land, unsigned_long_long, unsigned long long)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  /* Logical */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_HAVE_FORTRAN_LOGICAL
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -FUNC_FUNC_3BUF(land, fortran_logical, ompi_fortran_logical_t)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_HAVE_FORTRAN_LOGICAL
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +FUNC_FUNC_3BUF(land, fortran_logical, opal_fortran_logical_t)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  /* C++ bool */
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  FUNC_FUNC_3BUF(land, bool, bool)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -1123,8 +1123,8 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  FUNC_FUNC_3BUF(lor, unsigned_long_long, unsigned long long)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  /* Logical */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_HAVE_FORTRAN_LOGICAL
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -FUNC_FUNC_3BUF(lor, fortran_logical, ompi_fortran_logical_t)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_HAVE_FORTRAN_LOGICAL
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +FUNC_FUNC_3BUF(lor, fortran_logical, opal_fortran_logical_t)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  /* C++ bool */
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  FUNC_FUNC_3BUF(lor, bool, bool)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -1149,8 +1149,8 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  FUNC_FUNC_3BUF(lxor, unsigned_long_long, unsigned long long)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  /* Logical */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_HAVE_FORTRAN_LOGICAL
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -FUNC_FUNC_3BUF(lxor, fortran_logical, ompi_fortran_logical_t)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_HAVE_FORTRAN_LOGICAL
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +FUNC_FUNC_3BUF(lxor, fortran_logical, opal_fortran_logical_t)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  /* C++ bool */
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  FUNC_FUNC_3BUF(lxor, bool, bool)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -1175,23 +1175,23 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  FUNC_FUNC_3BUF(band, unsigned_long_long, unsigned long long)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  /* Fortran integer */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_HAVE_FORTRAN_INTEGER
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -FUNC_FUNC_3BUF(band, fortran_integer, ompi_fortran_integer_t)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_HAVE_FORTRAN_INTEGER
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +FUNC_FUNC_3BUF(band, fortran_integer, opal_fortran_integer_t)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_HAVE_FORTRAN_INTEGER1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -FUNC_FUNC_3BUF(band, fortran_integer1, ompi_fortran_integer1_t)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_HAVE_FORTRAN_INTEGER1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +FUNC_FUNC_3BUF(band, fortran_integer1, opal_fortran_integer1_t)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_HAVE_FORTRAN_INTEGER2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -FUNC_FUNC_3BUF(band, fortran_integer2, ompi_fortran_integer2_t)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_HAVE_FORTRAN_INTEGER2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +FUNC_FUNC_3BUF(band, fortran_integer2, opal_fortran_integer2_t)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_HAVE_FORTRAN_INTEGER4
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -FUNC_FUNC_3BUF(band, fortran_integer4, ompi_fortran_integer4_t)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_HAVE_FORTRAN_INTEGER4
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +FUNC_FUNC_3BUF(band, fortran_integer4, opal_fortran_integer4_t)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_HAVE_FORTRAN_INTEGER8
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -FUNC_FUNC_3BUF(band, fortran_integer8, ompi_fortran_integer8_t)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_HAVE_FORTRAN_INTEGER8
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +FUNC_FUNC_3BUF(band, fortran_integer8, opal_fortran_integer8_t)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_HAVE_FORTRAN_INTEGER16
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -FUNC_FUNC_3BUF(band, fortran_integer16, ompi_fortran_integer16_t)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_HAVE_FORTRAN_INTEGER16
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +FUNC_FUNC_3BUF(band, fortran_integer16, opal_fortran_integer16_t)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  /* Byte */
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  FUNC_FUNC_3BUF(band, byte, char)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -1216,23 +1216,23 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  FUNC_FUNC_3BUF(bor, unsigned_long_long, unsigned long long)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  /* Fortran integer */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_HAVE_FORTRAN_INTEGER
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -FUNC_FUNC_3BUF(bor, fortran_integer, ompi_fortran_integer_t)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_HAVE_FORTRAN_INTEGER
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +FUNC_FUNC_3BUF(bor, fortran_integer, opal_fortran_integer_t)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_HAVE_FORTRAN_INTEGER1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -FUNC_FUNC_3BUF(bor, fortran_integer1, ompi_fortran_integer1_t)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_HAVE_FORTRAN_INTEGER1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +FUNC_FUNC_3BUF(bor, fortran_integer1, opal_fortran_integer1_t)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_HAVE_FORTRAN_INTEGER2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -FUNC_FUNC_3BUF(bor, fortran_integer2, ompi_fortran_integer2_t)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_HAVE_FORTRAN_INTEGER2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +FUNC_FUNC_3BUF(bor, fortran_integer2, opal_fortran_integer2_t)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_HAVE_FORTRAN_INTEGER4
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -FUNC_FUNC_3BUF(bor, fortran_integer4, ompi_fortran_integer4_t)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_HAVE_FORTRAN_INTEGER4
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +FUNC_FUNC_3BUF(bor, fortran_integer4, opal_fortran_integer4_t)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_HAVE_FORTRAN_INTEGER8
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -FUNC_FUNC_3BUF(bor, fortran_integer8, ompi_fortran_integer8_t)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_HAVE_FORTRAN_INTEGER8
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +FUNC_FUNC_3BUF(bor, fortran_integer8, opal_fortran_integer8_t)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_HAVE_FORTRAN_INTEGER16
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -FUNC_FUNC_3BUF(bor, fortran_integer16, ompi_fortran_integer16_t)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_HAVE_FORTRAN_INTEGER16
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +FUNC_FUNC_3BUF(bor, fortran_integer16, opal_fortran_integer16_t)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  /* Byte */
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  FUNC_FUNC_3BUF(bor, byte, char)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -1257,23 +1257,23 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  FUNC_FUNC_3BUF(bxor, unsigned_long_long, unsigned long long)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  /* Fortran integer */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_HAVE_FORTRAN_INTEGER
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -FUNC_FUNC_3BUF(bxor, fortran_integer, ompi_fortran_integer_t)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_HAVE_FORTRAN_INTEGER
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +FUNC_FUNC_3BUF(bxor, fortran_integer, opal_fortran_integer_t)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_HAVE_FORTRAN_INTEGER1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -FUNC_FUNC_3BUF(bxor, fortran_integer1, ompi_fortran_integer1_t)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_HAVE_FORTRAN_INTEGER1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +FUNC_FUNC_3BUF(bxor, fortran_integer1, opal_fortran_integer1_t)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_HAVE_FORTRAN_INTEGER2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -FUNC_FUNC_3BUF(bxor, fortran_integer2, ompi_fortran_integer2_t)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_HAVE_FORTRAN_INTEGER2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +FUNC_FUNC_3BUF(bxor, fortran_integer2, opal_fortran_integer2_t)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_HAVE_FORTRAN_INTEGER4
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -FUNC_FUNC_3BUF(bxor, fortran_integer4, ompi_fortran_integer4_t)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_HAVE_FORTRAN_INTEGER4
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +FUNC_FUNC_3BUF(bxor, fortran_integer4, opal_fortran_integer4_t)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_HAVE_FORTRAN_INTEGER8
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -FUNC_FUNC_3BUF(bxor, fortran_integer8, ompi_fortran_integer8_t)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_HAVE_FORTRAN_INTEGER8
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +FUNC_FUNC_3BUF(bxor, fortran_integer8, opal_fortran_integer8_t)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_HAVE_FORTRAN_INTEGER16
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -FUNC_FUNC_3BUF(bxor, fortran_integer16, ompi_fortran_integer16_t)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_HAVE_FORTRAN_INTEGER16
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +FUNC_FUNC_3BUF(bxor, fortran_integer16, opal_fortran_integer16_t)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  /* Byte */
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  FUNC_FUNC_3BUF(bxor, byte, char)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -1283,14 +1283,14 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; *************************************************************************
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  /*
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_HAVE_FORTRAN_REAL
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -LOC_STRUCT_3BUF(2real, ompi_fortran_real_t, ompi_fortran_real_t)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_HAVE_FORTRAN_REAL
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +LOC_STRUCT_3BUF(2real, opal_fortran_real_t, opal_fortran_real_t)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_HAVE_FORTRAN_DOUBLE_PRECISION
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -LOC_STRUCT_3BUF(2double_precision, ompi_fortran_double_precision_t,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ompi_fortran_double_precision_t)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_HAVE_FORTRAN_DOUBLE_PRECISION
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +LOC_STRUCT_3BUF(2double_precision, opal_fortran_double_precision_t,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; opal_fortran_double_precision_t)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_HAVE_FORTRAN_INTEGER
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -LOC_STRUCT_3BUF(2integer, ompi_fortran_integer_t,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ompi_fortran_integer_t)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_HAVE_FORTRAN_INTEGER
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +LOC_STRUCT_3BUF(2integer, opal_fortran_integer_t,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; opal_fortran_integer_t)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  LOC_STRUCT_3BUF(float_int, float, int)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  LOC_STRUCT_3BUF(double_int, double, int)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -1306,13 +1306,13 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   * Max location
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; *************************************************************************
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_HAVE_FORTRAN_REAL
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_HAVE_FORTRAN_REAL
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  LOC_FUNC_3BUF(maxloc, 2real, &gt;)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_HAVE_FORTRAN_DOUBLE_PRECISION
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_HAVE_FORTRAN_DOUBLE_PRECISION
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  LOC_FUNC_3BUF(maxloc, 2double_precision, &gt;)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_HAVE_FORTRAN_INTEGER
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_HAVE_FORTRAN_INTEGER
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  LOC_FUNC_3BUF(maxloc, 2integer, &gt;)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  LOC_FUNC_3BUF(maxloc, float_int, &gt;)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -1328,13 +1328,13 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   * Min location
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; *************************************************************************
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_HAVE_FORTRAN_REAL
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_HAVE_FORTRAN_REAL
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  LOC_FUNC_3BUF(minloc, 2real, &lt;)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_HAVE_FORTRAN_DOUBLE_PRECISION
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_HAVE_FORTRAN_DOUBLE_PRECISION
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  LOC_FUNC_3BUF(minloc, 2double_precision, &lt;)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_HAVE_FORTRAN_INTEGER
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_HAVE_FORTRAN_INTEGER
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  LOC_FUNC_3BUF(minloc, 2integer, &lt;)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  LOC_FUNC_3BUF(minloc, float_int, &lt;)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -1422,42 +1422,42 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  /** All the Fortran integers
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ********************************************/
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_HAVE_FORTRAN_INTEGER
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_HAVE_FORTRAN_INTEGER
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #define FORTRAN_INTEGER_PLAIN(name)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ompi_op_base_##name##_fortran_integer
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #define FORTRAN_INTEGER_PLAIN_3BUFF(name)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ompi_op_base_3buff_##name##_fortran_integer
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #else
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #define FORTRAN_INTEGER_PLAIN(name) NULL
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #define FORTRAN_INTEGER_PLAIN_3BUFF(name) NULL
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_HAVE_FORTRAN_INTEGER1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_HAVE_FORTRAN_INTEGER1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #define FORTRAN_INTEGER1(name) ompi_op_base_##name##_fortran_integer1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #define FORTRAN_INTEGER1_3BUFF(name)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ompi_op_base_3buff_##name##_fortran_integer1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #else
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #define FORTRAN_INTEGER1(name) NULL
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #define FORTRAN_INTEGER1_3BUFF(name) NULL
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_HAVE_FORTRAN_INTEGER2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_HAVE_FORTRAN_INTEGER2
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #define FORTRAN_INTEGER2(name) ompi_op_base_##name##_fortran_integer2
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #define FORTRAN_INTEGER2_3BUFF(name)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ompi_op_base_3buff_##name##_fortran_integer2
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #else
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #define FORTRAN_INTEGER2(name) NULL
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #define FORTRAN_INTEGER2_3BUFF(name) NULL
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_HAVE_FORTRAN_INTEGER4
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_HAVE_FORTRAN_INTEGER4
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #define FORTRAN_INTEGER4(name) ompi_op_base_##name##_fortran_integer4
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #define FORTRAN_INTEGER4_3BUFF(name)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ompi_op_base_3buff_##name##_fortran_integer4
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #else
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #define FORTRAN_INTEGER4(name) NULL
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #define FORTRAN_INTEGER4_3BUFF(name) NULL
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_HAVE_FORTRAN_INTEGER8
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_HAVE_FORTRAN_INTEGER8
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #define FORTRAN_INTEGER8(name) ompi_op_base_##name##_fortran_integer8
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #define FORTRAN_INTEGER8_3BUFF(name)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ompi_op_base_3buff_##name##_fortran_integer8
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #else
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #define FORTRAN_INTEGER8(name) NULL
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #define FORTRAN_INTEGER8_3BUFF(name) NULL
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_HAVE_FORTRAN_INTEGER16
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_HAVE_FORTRAN_INTEGER16
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #define FORTRAN_INTEGER16(name)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ompi_op_base_##name##_fortran_integer16
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #define FORTRAN_INTEGER16_3BUFF(name)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ompi_op_base_3buff_##name##_fortran_integer16
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #else
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -1498,28 +1498,28 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  /** All the Fortran reals
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ***********************************************/
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_HAVE_FORTRAN_REAL
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_HAVE_FORTRAN_REAL
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #define FLOATING_POINT_FORTRAN_REAL_PLAIN(name)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ompi_op_base_##name##_fortran_real
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #define FLOATING_POINT_FORTRAN_REAL_PLAIN_3BUFF(name)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ompi_op_base_3buff_##name##_fortran_real
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #else
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #define FLOATING_POINT_FORTRAN_REAL_PLAIN(name) NULL
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #define FLOATING_POINT_FORTRAN_REAL_PLAIN_3BUFF(name) NULL
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_HAVE_FORTRAN_REAL2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_HAVE_FORTRAN_REAL2
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #define FLOATING_POINT_FORTRAN_REAL2(name)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ompi_op_base_##name##_fortran_real2
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #define FLOATING_POINT_FORTRAN_REAL2_3BUFF(name)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ompi_op_base_3buff_##name##_fortran_real2
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #else
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #define FLOATING_POINT_FORTRAN_REAL2(name) NULL
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #define FLOATING_POINT_FORTRAN_REAL2_3BUFF(name) NULL
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_HAVE_FORTRAN_REAL4
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_HAVE_FORTRAN_REAL4
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #define FLOATING_POINT_FORTRAN_REAL4(name)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ompi_op_base_##name##_fortran_real4
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #define FLOATING_POINT_FORTRAN_REAL4_3BUFF(name)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ompi_op_base_3buff_##name##_fortran_real4
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #else
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #define FLOATING_POINT_FORTRAN_REAL4(name) NULL
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #define FLOATING_POINT_FORTRAN_REAL4_3BUFF(name) NULL
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_HAVE_FORTRAN_REAL8
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_HAVE_FORTRAN_REAL8
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #define FLOATING_POINT_FORTRAN_REAL8(name)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ompi_op_base_##name##_fortran_real8
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #define FLOATING_POINT_FORTRAN_REAL8_3BUFF(name)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ompi_op_base_3buff_##name##_fortran_real8
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #else
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -1532,7 +1532,7 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       corresponding C type
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     Only then do we put in function pointers for REAL*16 reductions.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     Otherwise, just put in NULL. */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_HAVE_FORTRAN_REAL16 &amp;&amp; OMPI_REAL16_MATCHES_C
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_HAVE_FORTRAN_REAL16 &amp;&amp; OPAL_REAL16_MATCHES_C
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #define FLOATING_POINT_FORTRAN_REAL16(name)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ompi_op_base_##name##_fortran_real16
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #define FLOATING_POINT_FORTRAN_REAL16_3BUFF(name)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ompi_op_base_3buff_##name##_fortran_real16
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #else
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -1556,7 +1556,7 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  /** Fortran double precision
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ********************************************/
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_HAVE_FORTRAN_DOUBLE_PRECISION
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_HAVE_FORTRAN_DOUBLE_PRECISION
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #define FLOATING_POINT_FORTRAN_DOUBLE_PRECISION(name) \
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      ompi_op_base_##name##_fortran_double_precision
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #define FLOATING_POINT_FORTRAN_DOUBLE_PRECISION_3BUFF(name) \
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -1606,7 +1606,7 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  /** Fortran logical
</span><br>
<span class="quotelev3">&gt;&gt;&gt; *****************************************************/
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_HAVE_FORTRAN_LOGICAL
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_HAVE_FORTRAN_LOGICAL
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #define FORTRAN_LOGICAL(name) \
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    ompi_op_base_##name##_fortran_logical  /*
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OMPI_OP_BASE_TYPE_LOGICAL */
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #define FORTRAN_LOGICAL_3BUFF(name) \
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -1632,28 +1632,28 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  /** Fortran complex
</span><br>
<span class="quotelev3">&gt;&gt;&gt; *****************************************************/
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_HAVE_FORTRAN_REAL &amp;&amp; OMPI_HAVE_FORTRAN_COMPLEX
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_HAVE_FORTRAN_REAL &amp;&amp; OPAL_HAVE_FORTRAN_COMPLEX
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #define COMPLEX_PLAIN(name) ompi_op_base_##name##_fortran_complex
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #define COMPLEX_PLAIN_3BUFF(name)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ompi_op_base_3buff_##name##_fortran_complex
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #else
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #define COMPLEX_PLAIN(name) NULL
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #define COMPLEX_PLAIN_3BUFF(name) NULL
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_HAVE_FORTRAN_DOUBLE_PRECISION &amp;&amp; OMPI_HAVE_FORTRAN_COMPLEX
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_HAVE_FORTRAN_DOUBLE_PRECISION &amp;&amp; OPAL_HAVE_FORTRAN_COMPLEX
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #define COMPLEX_DOUBLE(name)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ompi_op_base_##name##_fortran_double_complex
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #define COMPLEX_DOUBLE_3BUFF(name)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ompi_op_base_3buff_##name##_fortran_double_complex
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #else
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #define COMPLEX_DOUBLE(name) NULL
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #define COMPLEX_DOUBLE_3BUFF(name) NULL
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_HAVE_FORTRAN_REAL4 &amp;&amp; OMPI_HAVE_FORTRAN_COMPLEX8
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_HAVE_FORTRAN_REAL4 &amp;&amp; OPAL_HAVE_FORTRAN_COMPLEX8
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #define COMPLEX8(name) ompi_op_base_##name##_fortran_complex8
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #define COMPLEX8_3BUFF(name)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ompi_op_base_3buff_##name##_fortran_complex8
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #else
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #define COMPLEX8(name) NULL
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #define COMPLEX8_3BUFF(name) NULL
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_HAVE_FORTRAN_REAL8 &amp;&amp; OMPI_HAVE_FORTRAN_COMPLEX16
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_HAVE_FORTRAN_REAL8 &amp;&amp; OPAL_HAVE_FORTRAN_COMPLEX16
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #define COMPLEX16(name) ompi_op_base_##name##_fortran_complex16
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #define COMPLEX16_3BUFF(name)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ompi_op_base_3buff_##name##_fortran_complex16
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #else
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -1667,7 +1667,7 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     - we have fortran COMPILEX*32
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     Only then do we put in function pointers for COMPLEX*32
</span><br>
<span class="quotelev3">&gt;&gt;&gt; reductions.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     Otherwise, just put in NULL. */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_HAVE_FORTRAN_REAL16 &amp;&amp; OMPI_REAL16_MATCHES_C &amp;&amp;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OMPI_HAVE_FORTRAN_COMPLEX32
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_HAVE_FORTRAN_REAL16 &amp;&amp; OPAL_REAL16_MATCHES_C &amp;&amp;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OPAL_HAVE_FORTRAN_COMPLEX32
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #define COMPLEX32(name) ompi_op_base_##name##_fortran_complex32
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #define COMPLEX32_3BUFF(name)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ompi_op_base_3buff_##name##_fortran_complex32
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #else
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -1719,21 +1719,21 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  /** Fortran complex
</span><br>
<span class="quotelev3">&gt;&gt;&gt; *****************************************************/
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  /** Fortran &quot;2&quot; types
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ***************************************************/
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_HAVE_FORTRAN_REAL
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_HAVE_FORTRAN_REAL
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #define TWOLOC_FORTRAN_2REAL(name) ompi_op_base_##name##_2real
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #define TWOLOC_FORTRAN_2REAL_3BUFF(name)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ompi_op_base_3buff_##name##_2real
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #else
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #define TWOLOC_FORTRAN_2REAL(name) NULL
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #define TWOLOC_FORTRAN_2REAL_3BUFF(name) NULL
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_HAVE_FORTRAN_DOUBLE_PRECISION
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_HAVE_FORTRAN_DOUBLE_PRECISION
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #define TWOLOC_FORTRAN_2DOUBLE_PRECISION(name)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ompi_op_base_##name##_2double_precision
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #define TWOLOC_FORTRAN_2DOUBLE_PRECISION_3BUFF(name)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ompi_op_base_3buff_##name##_2double_precision
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #else
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #define TWOLOC_FORTRAN_2DOUBLE_PRECISION(name) NULL
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #define TWOLOC_FORTRAN_2DOUBLE_PRECISION_3BUFF(name) NULL
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_HAVE_FORTRAN_INTEGER
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_HAVE_FORTRAN_INTEGER
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #define TWOLOC_FORTRAN_2INTEGER(name) ompi_op_base_##name##_2integer
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #define TWOLOC_FORTRAN_2INTEGER_3BUFF(name)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ompi_op_base_3buff_##name##_2integer
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #else
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Modified: trunk/ompi/mca/osc/base/osc_base_obj_convert.c
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ======================================================================
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --- trunk/ompi/mca/osc/base/osc_base_obj_convert.c      (original)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +++ trunk/ompi/mca/osc/base/osc_base_obj_convert.c      2009-05-30
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 11:54:29 EDT (Sat, 30 May 2009)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -149,13 +149,13 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #else
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     (conversion_fct_t)NULL,                      /*
</span><br>
<span class="quotelev3">&gt;&gt;&gt; DT_CXX_BOOL            */
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_SIZEOF_FORTRAN_LOGICAL == SIZEOF_CHAR
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_SIZEOF_FORTRAN_LOGICAL == SIZEOF_CHAR
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     (conversion_fct_t)copy_char,                 /*
</span><br>
<span class="quotelev3">&gt;&gt;&gt; DT_LOGIC               */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#elif OMPI_SIZEOF_FORTRAN_LOGICAL == SIZEOF_SHORT
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#elif OPAL_SIZEOF_FORTRAN_LOGICAL == SIZEOF_SHORT
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     (conversion_fct_t)copy_short,                /*
</span><br>
<span class="quotelev3">&gt;&gt;&gt; DT_LOGIC               */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#elif OMPI_SIZEOF_FORTRAN_LOGICAL == SIZEOF_INT
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#elif OPAL_SIZEOF_FORTRAN_LOGICAL == SIZEOF_INT
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     (conversion_fct_t)copy_int,                  /*
</span><br>
<span class="quotelev3">&gt;&gt;&gt; DT_LOGIC               */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#elif OMPI_SIZEOF_FORTRAN_LOGICAL == SIZEOF_LONG
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#elif OPAL_SIZEOF_FORTRAN_LOGICAL == SIZEOF_LONG
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     (conversion_fct_t)copy_long,                 /*
</span><br>
<span class="quotelev3">&gt;&gt;&gt; DT_LOGIC               */
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #else
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     (conversion_fct_t)NULL,                      /*
</span><br>
<span class="quotelev3">&gt;&gt;&gt; DT_LOGIC               */
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Modified: trunk/ompi/mpi/c/type_create_f90_integer.c
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ======================================================================
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --- trunk/ompi/mpi/c/type_create_f90_integer.c  (original)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +++ trunk/ompi/mpi/c/type_create_f90_integer.c  2009-05-30 11:54:29
</span><br>
<span class="quotelev3">&gt;&gt;&gt; EDT (Sat, 30 May 2009)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -60,11 +60,11 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       */
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      if      (r &gt; 38) *newtype = &amp;ompi_mpi_datatype_null.dt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_HAVE_F90_INTEGER16
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_HAVE_F90_INTEGER16
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      else if (r &gt; 18) *newtype = &amp;ompi_mpi_long_long_int.dt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #else
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      else if (r &gt; 18) *newtype = &amp;ompi_mpi_datatype_null.dt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#endif  /* OMPI_HAVE_F90_INTEGER16 */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#endif  /* OPAL_HAVE_F90_INTEGER16 */
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #if SIZEOF_LONG &gt; SIZEOF_INT
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      else if (r &gt;  9) *newtype = &amp;ompi_mpi_long.dt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #else
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Modified: trunk/ompi/mpi/f77/base/attr_fn_f.c
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ======================================================================
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --- trunk/ompi/mpi/f77/base/attr_fn_f.c (original)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +++ trunk/ompi/mpi/f77/base/attr_fn_f.c 2009-05-30 11:54:29 EDT
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (Sat, 30 May 2009)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -85,14 +85,14 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                              mpi_type_null_copy_fn_,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                              mpi_type_null_copy_fn__,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                              mpi_type_null_copy_fn_f,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -                            (MPI_Fint* type, MPI_Fint* type_keyval,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI_Aint* extra_state, MPI_Aint* attribute_val_in, MPI_Aint*
</span><br>
<span class="quotelev3">&gt;&gt;&gt; attribute_val_out, ompi_fortran_logical_t* flag, MPI_Fint* ierr),
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +                            (MPI_Fint* type, MPI_Fint* type_keyval,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI_Aint* extra_state, MPI_Aint* attribute_val_in, MPI_Aint*
</span><br>
<span class="quotelev3">&gt;&gt;&gt; attribute_val_out, MPI_Flogical* flag, MPI_Fint* ierr),
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                              (type, type_keyval, extra_state,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; attribute_val_in, attribute_val_out, flag, ierr) )
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  OMPI_GENERATE_F77_BINDINGS( MPI_TYPE_DUP_FN,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                              mpi_type_dup_fn,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                              mpi_type_dup_fn_,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                              mpi_type_dup_fn__,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                              mpi_type_dup_fn_f,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -                            (MPI_Fint* type, MPI_Fint* type_keyval,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI_Aint* extra_state, MPI_Aint* attribute_val_in, MPI_Aint*
</span><br>
<span class="quotelev3">&gt;&gt;&gt; attribute_val_out, ompi_fortran_logical_t* flag, MPI_Fint* ierr),
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +                            (MPI_Fint* type, MPI_Fint* type_keyval,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI_Aint* extra_state, MPI_Aint* attribute_val_in, MPI_Aint*
</span><br>
<span class="quotelev3">&gt;&gt;&gt; attribute_val_out, MPI_Flogical* flag, MPI_Fint* ierr),
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                              (type, type_keyval, extra_state,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; attribute_val_in, attribute_val_out, flag, ierr) )
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  OMPI_GENERATE_F77_BINDINGS( MPI_COMM_NULL_DELETE_FN,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                              mpi_comm_null_delete_fn,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -106,14 +106,14 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                              mpi_comm_null_copy_fn_,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                              mpi_comm_null_copy_fn__,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                              mpi_comm_null_copy_fn_f,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -                            (MPI_Fint* comm, MPI_Fint* comm_keyval,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI_Aint* extra_state, MPI_Aint* attribute_val_in, MPI_Aint*
</span><br>
<span class="quotelev3">&gt;&gt;&gt; attribute_val_out, ompi_fortran_logical_t* flag, MPI_Fint* ierr),
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +                            (MPI_Fint* comm, MPI_Fint* comm_keyval,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI_Aint* extra_state, MPI_Aint* attribute_val_in, MPI_Aint*
</span><br>
<span class="quotelev3">&gt;&gt;&gt; attribute_val_out, MPI_Flogical* flag, MPI_Fint* ierr),
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                              (comm, comm_keyval, extra_state,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; attribute_val_in, attribute_val_out, flag, ierr) )
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  OMPI_GENERATE_F77_BINDINGS( MPI_COMM_DUP_FN,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                              mpi_comm_dup_fn,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                              mpi_comm_dup_fn_,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                              mpi_comm_dup_fn__,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                              mpi_comm_dup_fn_f,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -                            (MPI_Fint* comm, MPI_Fint* comm_keyval,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI_Aint* extra_state, MPI_Aint* attribute_val_in, MPI_Aint*
</span><br>
<span class="quotelev3">&gt;&gt;&gt; attribute_val_out, ompi_fortran_logical_t* flag, MPI_Fint* ierr),
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +                            (MPI_Fint* comm, MPI_Fint* comm_keyval,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI_Aint* extra_state, MPI_Aint* attribute_val_in, MPI_Aint*
</span><br>
<span class="quotelev3">&gt;&gt;&gt; attribute_val_out, MPI_Flogical* flag, MPI_Fint* ierr),
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                              (comm, comm_keyval, extra_state,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; attribute_val_in, attribute_val_out, flag, ierr) )
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  OMPI_GENERATE_F77_BINDINGS( MPI_NULL_DELETE_FN,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                              mpi_null_delete_fn,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -127,14 +127,14 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                              mpi_null_copy_fn_,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                              mpi_null_copy_fn__,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                              mpi_null_copy_fn_f,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -                            (MPI_Fint* comm, MPI_Fint* comm_keyval,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI_Fint* extra_state, MPI_Fint* attribute_val_in, MPI_Fint*
</span><br>
<span class="quotelev3">&gt;&gt;&gt; attribute_val_out, ompi_fortran_logical_t* flag, MPI_Fint* ierr),
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +                            (MPI_Fint* comm, MPI_Fint* comm_keyval,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI_Fint* extra_state, MPI_Fint* attribute_val_in, MPI_Fint*
</span><br>
<span class="quotelev3">&gt;&gt;&gt; attribute_val_out, MPI_Flogical* flag, MPI_Fint* ierr),
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                              (comm, comm_keyval, extra_state,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; attribute_val_in, attribute_val_out, flag, ierr) )
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  OMPI_GENERATE_F77_BINDINGS( MPI_DUP_FN,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                              mpi_dup_fn,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                              mpi_dup_fn_,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                              mpi_dup_fn__,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                              mpi_dup_fn_f,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -                            (MPI_Fint* comm, MPI_Fint* comm_keyval,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI_Fint* extra_state, MPI_Fint* attribute_val_in, MPI_Fint*
</span><br>
<span class="quotelev3">&gt;&gt;&gt; attribute_val_out, ompi_fortran_logical_t* flag, MPI_Fint* ierr),
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +                            (MPI_Fint* comm, MPI_Fint* comm_keyval,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI_Fint* extra_state, MPI_Fint* attribute_val_in, MPI_Fint*
</span><br>
<span class="quotelev3">&gt;&gt;&gt; attribute_val_out, MPI_Flogical* flag, MPI_Fint* ierr),
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                              (comm, comm_keyval, extra_state,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; attribute_val_in, attribute_val_out, flag, ierr) )
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  OMPI_GENERATE_F77_BINDINGS( MPI_WIN_NULL_DELETE_FN,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -149,14 +149,14 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                              mpi_win_null_copy_fn_,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                              mpi_win_null_copy_fn__,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                              mpi_win_null_copy_fn_f,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -                            (MPI_Fint* window, MPI_Fint*
</span><br>
<span class="quotelev3">&gt;&gt;&gt; win_keyval, MPI_Aint* extra_state, MPI_Aint* attribute_val_in,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI_Aint* attribute_val_out, ompi_fortran_logical_t* flag, MPI_Fint*
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ierr),
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +                            (MPI_Fint* window, MPI_Fint*
</span><br>
<span class="quotelev3">&gt;&gt;&gt; win_keyval, MPI_Aint* extra_state, MPI_Aint* attribute_val_in,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI_Aint* attribute_val_out, MPI_Flogical* flag, MPI_Fint* ierr),
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                              (window, win_keyval, extra_state,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; attribute_val_in, attribute_val_out, flag, ierr) )
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  OMPI_GENERATE_F77_BINDINGS( MPI_WIN_DUP_FN,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                              mpi_win_dup_fn,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                              mpi_win_dup_fn_,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                              mpi_win_dup_fn__,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                              mpi_win_dup_fn_f,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -                            (MPI_Fint* window, MPI_Fint*
</span><br>
<span class="quotelev3">&gt;&gt;&gt; win_keyval, MPI_Aint* extra_state, MPI_Aint* attribute_val_in,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI_Aint* attribute_val_out, ompi_fortran_logical_t* flag, MPI_Fint*
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ierr),
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +                            (MPI_Fint* window, MPI_Fint*
</span><br>
<span class="quotelev3">&gt;&gt;&gt; win_keyval, MPI_Aint* extra_state, MPI_Aint* attribute_val_in,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI_Aint* attribute_val_out, MPI_Flogical* flag, MPI_Fint* ierr),
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                              (window, win_keyval, extra_state,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; attribute_val_in, attribute_val_out, flag, ierr) )
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -194,9 +194,9 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                               MPI_Aint* extra_state,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                               MPI_Aint* attribute_val_in,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                               MPI_Aint* attribute_val_out,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -                             ompi_fortran_logical_t* flag,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI_Fint* ierr)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +                             MPI_Flogical* flag, MPI_Fint* ierr)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  {
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -    *flag = (ompi_fortran_logical_t) 0;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +    *flag = (MPI_Flogical) 0;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      *ierr = OMPI_INT_2_FINT(MPI_SUCCESS);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  }
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -204,9 +204,9 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                         MPI_Aint* extra_state,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                         MPI_Aint* attribute_val_in,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                         MPI_Aint* attribute_val_out,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -                       ompi_fortran_logical_t* flag, MPI_Fint* ierr )
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +                       MPI_Flogical* flag, MPI_Fint* ierr )
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  {
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -    *flag = (ompi_fortran_logical_t) 1;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +    *flag = (MPI_Flogical) 1;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      *attribute_val_out = *attribute_val_in;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      *ierr = OMPI_INT_2_FINT(MPI_SUCCESS);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  }
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -222,9 +222,9 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                MPI_Aint* extra_state,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                MPI_Aint* attribute_val_in,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                MPI_Aint* attribute_val_out,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -                              ompi_fortran_logical_t* flag,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI_Fint* ierr )
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +                              MPI_Flogical* flag, MPI_Fint* ierr )
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  {
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -    *flag = (ompi_fortran_logical_t) 0;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +    *flag = (MPI_Flogical) 0;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      *ierr = OMPI_INT_2_FINT(MPI_SUCCESS);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  }
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -232,9 +232,9 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                          MPI_Aint* extra_state,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                          MPI_Aint* attribute_val_in,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                          MPI_Aint* attribute_val_out,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -                        ompi_fortran_logical_t* flag, MPI_Fint*
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ierr )
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +                        MPI_Flogical* flag, MPI_Fint* ierr )
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  {
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -    *flag = (ompi_fortran_logical_t) 1;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +    *flag = (MPI_Flogical) 1;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      *attribute_val_out = *attribute_val_in;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      *ierr = OMPI_INT_2_FINT(MPI_SUCCESS);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  }
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -250,9 +250,9 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                           MPI_Fint* extra_state,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                           MPI_Fint* attribute_val_in,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                           MPI_Fint* attribute_val_out,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -                         ompi_fortran_logical_t* flag, MPI_Fint*
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ierr )
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +                         MPI_Flogical* flag, MPI_Fint* ierr )
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  {
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -    *flag = (ompi_fortran_logical_t) 0;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +    *flag = (MPI_Flogical) 0;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      *ierr = OMPI_INT_2_FINT(MPI_SUCCESS);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  }
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -261,9 +261,9 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                     MPI_Fint* extra_state,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                     MPI_Fint* attribute_val_in,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                     MPI_Fint* attribute_val_out,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -                   ompi_fortran_logical_t* flag, MPI_Fint* ierr )
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +                   MPI_Flogical* flag, MPI_Fint* ierr )
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  {
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -    *flag = (ompi_fortran_logical_t) 1;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +    *flag = (MPI_Flogical) 1;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      *attribute_val_out = *attribute_val_in;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      *ierr = OMPI_INT_2_FINT(MPI_SUCCESS);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  }
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -279,9 +279,9 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                               MPI_Aint* extra_state,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                               MPI_Aint* attribute_val_in,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                               MPI_Aint* attribute_val_out,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -                             ompi_fortran_logical_t* flag,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI_Fint* ierr )
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +                             MPI_Flogical* flag, MPI_Fint* ierr )
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  {
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -    *flag = (ompi_fortran_logical_t) 0;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +    *flag = (MPI_Flogical) 0;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      *ierr = OMPI_INT_2_FINT(MPI_SUCCESS);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  }
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -289,9 +289,9 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                         MPI_Aint* extra_state,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                         MPI_Aint* attribute_val_in,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                         MPI_Aint* attribute_val_out,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -                       ompi_fortran_logical_t* flag, MPI_Fint* ierr )
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +                       MPI_Flogical* flag, MPI_Fint* ierr )
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  {
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -    *flag = (ompi_fortran_logical_t) 1;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +    *flag = (MPI_Flogical) 1;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      *attribute_val_out = *attribute_val_in;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      *ierr = OMPI_INT_2_FINT(MPI_SUCCESS);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  }
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Modified: trunk/ompi/mpi/f77/file_read_all_end_f.c
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ======================================================================
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --- trunk/ompi/mpi/f77/file_read_all_end_f.c    (original)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +++ trunk/ompi/mpi/f77/file_read_all_end_f.c    2009-05-30 11:54:29
</span><br>
<span class="quotelev3">&gt;&gt;&gt; EDT (Sat, 30 May 2009)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -62,7 +62,7 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                              MPI_Fint *ierr)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      MPI_Status *c_status;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_SIZEOF_FORTRAN_INTEGER != SIZEOF_INT
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_SIZEOF_FORTRAN_INTEGER != SIZEOF_INT
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      MPI_Status c_status2;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      MPI_File c_fh = MPI_File_f2c(*fh);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -77,7 +77,7 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             translation necessary -- let the underlying functions
</span><br>
<span class="quotelev3">&gt;&gt;&gt; write
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             directly into the Fortran status */
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_SIZEOF_FORTRAN_INTEGER == SIZEOF_INT
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_SIZEOF_FORTRAN_INTEGER == SIZEOF_INT
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          c_status = (MPI_Status *) status;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #else
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          c_status = &amp;c_status2;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -86,7 +86,7 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      *ierr = OMPI_INT_2_FINT(MPI_File_read_all_end(c_fh, buf,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; c_status));
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_SIZEOF_FORTRAN_INTEGER != SIZEOF_INT
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_SIZEOF_FORTRAN_INTEGER != SIZEOF_INT
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      if (MPI_SUCCESS == OMPI_FINT_2_INT(*ierr) &amp;&amp;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          MPI_STATUS_IGNORE != c_status) {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          MPI_Status_c2f(c_status, status);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Modified: trunk/ompi/mpi/f77/file_read_all_f.c
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ======================================================================
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --- trunk/ompi/mpi/f77/file_read_all_f.c        (original)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +++ trunk/ompi/mpi/f77/file_read_all_f.c        2009-05-30 11:54:29
</span><br>
<span class="quotelev3">&gt;&gt;&gt; EDT (Sat, 30 May 2009)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -64,7 +64,7 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     MPI_File c_fh = MPI_File_f2c(*fh);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     MPI_Datatype c_type = MPI_Type_f2c(*datatype);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     MPI_Status *c_status;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_SIZEOF_FORTRAN_INTEGER != SIZEOF_INT
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_SIZEOF_FORTRAN_INTEGER != SIZEOF_INT
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     MPI_Status c_status2;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -76,7 +76,7 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt;           translation necessary -- let the underlying functions write
</span><br>
<span class="quotelev3">&gt;&gt;&gt;           directly into the Fortran status */
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_SIZEOF_FORTRAN_INTEGER == SIZEOF_INT
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_SIZEOF_FORTRAN_INTEGER == SIZEOF_INT
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        c_status = (MPI_Status *) status;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #else
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        c_status = &amp;c_status2;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -87,7 +87,7 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                               OMPI_FINT_2_INT(*count),
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                               c_type, c_status));
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_SIZEOF_FORTRAN_INTEGER != SIZEOF_INT
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_SIZEOF_FORTRAN_INTEGER != SIZEOF_INT
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     if (MPI_SUCCESS == OMPI_FINT_2_INT(*ierr) &amp;&amp;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         MPI_STATUS_IGNORE != c_status) {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        MPI_Status_c2f(c_status, status);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Modified: trunk/ompi/mpi/f77/file_read_at_all_end_f.c
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ======================================================================
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --- trunk/ompi/mpi/f77/file_read_at_all_end_f.c (original)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +++ trunk/ompi/mpi/f77/file_read_at_all_end_f.c 2009-05-30 11:54:29
</span><br>
<span class="quotelev3">&gt;&gt;&gt; EDT (Sat, 30 May 2009)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -63,7 +63,7 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      MPI_File c_fh = MPI_File_f2c(*fh);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      MPI_Status *c_status;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_SIZEOF_FORTRAN_INTEGER != SIZEOF_INT
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_SIZEOF_FORTRAN_INTEGER != SIZEOF_INT
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      MPI_Status c_status2;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -77,7 +77,7 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             translation necessary -- let the underlying functions
</span><br>
<span class="quotelev3">&gt;&gt;&gt; write
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             directly into the Fortran status */
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_SIZEOF_FORTRAN_INTEGER == SIZEOF_INT
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_SIZEOF_FORTRAN_INTEGER == SIZEOF_INT
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          c_status = (MPI_Status *) status;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #else
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          c_status = &amp;c_status2;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -86,7 +86,7 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      *ierr = OMPI_FINT_2_INT(MPI_File_read_at_all_end(c_fh, buf,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; c_status));
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_SIZEOF_FORTRAN_INTEGER != SIZEOF_INT
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_SIZEOF_FORTRAN_INTEGER != SIZEOF_INT
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      if (MPI_SUCCESS == OMPI_FINT_2_INT(*ierr) &amp;&amp;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          MPI_STATUS_IGNORE != c_status) {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          MPI_Status_c2f(c_status, status);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Modified: trunk/ompi/mpi/f77/file_read_at_all_f.c
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ======================================================================
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --- trunk/ompi/mpi/f77/file_read_at_all_f.c     (original)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +++ trunk/ompi/mpi/f77/file_read_at_all_f.c     2009-05-30 11:54:29
</span><br>
<span class="quotelev3">&gt;&gt;&gt; EDT (Sat, 30 May 2009)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -67,7 +67,7 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     MPI_File c_fh = MPI_File_f2c(*fh);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     MPI_Datatype c_type = MPI_Type_f2c(*datatype);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     MPI_Status *c_status;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_SIZEOF_FORTRAN_INTEGER != SIZEOF_INT
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_SIZEOF_FORTRAN_INTEGER != SIZEOF_INT
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     MPI_Status c_status2;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -79,7 +79,7 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt;           translation necessary -- let the underlying functions write
</span><br>
<span class="quotelev3">&gt;&gt;&gt;           directly into the Fortran status */
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_SIZEOF_FORTRAN_INTEGER == SIZEOF_INT
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_SIZEOF_FORTRAN_INTEGER == SIZEOF_INT
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        c_status = (MPI_Status *) status;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #else
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        c_status = &amp;c_status2;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -93,7 +93,7 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                                  c_type,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                                  c_status));
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_SIZEOF_FORTRAN_INTEGER != SIZEOF_INT
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_SIZEOF_FORTRAN_INTEGER != SIZEOF_INT
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     if (MPI_SUCCESS == OMPI_FINT_2_INT(*ierr) &amp;&amp;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         MPI_STATUS_IGNORE != c_status) {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        MPI_Status_c2f(c_status, status);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Modified: trunk/ompi/mpi/f77/file_read_at_f.c
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ======================================================================
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --- trunk/ompi/mpi/f77/file_read_at_f.c (original)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +++ trunk/ompi/mpi/f77/file_read_at_f.c 2009-05-30 11:54:29 EDT
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (Sat, 30 May 2009)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -66,7 +66,7 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      MPI_File c_fh = MPI_File_f2c(*fh);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      MPI_Datatype c_type = MPI_Type_f2c(*datatype);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      MPI_Status *c_status;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_SIZEOF_FORTRAN_INTEGER != SIZEOF_INT
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_SIZEOF_FORTRAN_INTEGER != SIZEOF_INT
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      MPI_Status c_status2;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -80,7 +80,7 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             translation necessary -- let the underlying functions
</span><br>
<span class="quotelev3">&gt;&gt;&gt; write
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             directly into the Fortran status */
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_SIZEOF_FORTRAN_INTEGER == SIZEOF_INT
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_SIZEOF_FORTRAN_INTEGER == SIZEOF_INT
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          c_status = (MPI_Status *) status;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #else
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          c_status = &amp;c_status2;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -93,7 +93,7 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                              OMPI_FINT_2_INT(*count),
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                              c_type, c_status));
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_SIZEOF_FORTRAN_INTEGER != SIZEOF_INT
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_SIZEOF_FORTRAN_INTEGER != SIZEOF_INT
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     if (MPI_SUCCESS == OMPI_FINT_2_INT(*ierr) &amp;&amp;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         MPI_STATUS_IGNORE != c_status) {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          MPI_Status_c2f(c_status, status);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Modified: trunk/ompi/mpi/f77/file_read_f.c
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ======================================================================
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --- trunk/ompi/mpi/f77/file_read_f.c    (original)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +++ trunk/ompi/mpi/f77/file_read_f.c    2009-05-30 11:54:29 EDT
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (Sat, 30 May 2009)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -65,7 +65,7 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     MPI_File c_fh = MPI_File_f2c(*fh);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     MPI_Datatype c_type = MPI_Type_f2c(*datatype);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     MPI_Status *c_status;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_SIZEOF_FORTRAN_INTEGER != SIZEOF_INT
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_SIZEOF_FORTRAN_INTEGER != SIZEOF_INT
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     MPI_Status c_status2;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -77,7 +77,7 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt;           translation necessary -- let the underlying functions write
</span><br>
<span class="quotelev3">&gt;&gt;&gt;           directly into the Fortran status */
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_SIZEOF_FORTRAN_INTEGER == SIZEOF_INT
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_SIZEOF_FORTRAN_INTEGER == SIZEOF_INT
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        c_status = (MPI_Status *) status;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #else
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        c_status = &amp;c_status2;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -88,7 +88,7 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                           OMPI_FINT_2_INT(*count),
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                           c_type, c_status));
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_SIZEOF_FORTRAN_INTEGER != SIZEOF_INT
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_SIZEOF_FORTRAN_INTEGER != SIZEOF_INT
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     if (MPI_SUCCESS == OMPI_FINT_2_INT(*ierr) &amp;&amp;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         MPI_STATUS_IGNORE != c_status) {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        MPI_Status_c2f(c_status, status);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Modified: trunk/ompi/mpi/f77/file_read_ordered_end_f.c
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ======================================================================
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --- trunk/ompi/mpi/f77/file_read_ordered_end_f.c        (original)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +++ trunk/ompi/mpi/f77/file_read_ordered_end_f.c        2009-05-30
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 11:54:29 EDT (Sat, 30 May 2009)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -64,7 +64,7 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      MPI_File c_fh = MPI_File_f2c(*fh);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      MPI_Status *c_status;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_SIZEOF_FORTRAN_INTEGER != SIZEOF_INT
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_SIZEOF_FORTRAN_INTEGER != SIZEOF_INT
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      MPI_Status c_status2;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -78,7 +78,7 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             translation necessary -- let the underlying functions
</span><br>
<span class="quotelev3">&gt;&gt;&gt; write
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             directly into the Fortran status */
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_SIZEOF_FORTRAN_INTEGER == SIZEOF_INT
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_SIZEOF_FORTRAN_INTEGER == SIZEOF_INT
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          c_status = (MPI_Status *) status;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #else
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          c_status = &amp;c_status2;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -87,7 +87,7 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      *ierr = OMPI_INT_2_FINT(MPI_File_read_ordered_end(c_fh, buf,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; c_status));
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_SIZEOF_FORTRAN_INTEGER != SIZEOF_INT
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_SIZEOF_FORTRAN_INTEGER != SIZEOF_INT
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      if (MPI_SUCCESS == OMPI_FINT_2_INT(*ierr) &amp;&amp;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         MPI_STATUS_IGNORE != c_status) {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          MPI_Status_c2f(c_status, status);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Modified: trunk/ompi/mpi/f77/file_read_ordered_f.c
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ======================================================================
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --- trunk/ompi/mpi/f77/file_read_ordered_f.c    (original)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +++ trunk/ompi/mpi/f77/file_read_ordered_f.c    2009-05-30 11:54:29
</span><br>
<span class="quotelev3">&gt;&gt;&gt; EDT (Sat, 30 May 2009)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -65,7 +65,7 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     MPI_File c_fh = MPI_File_f2c(*fh);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     MPI_Datatype c_type = MPI_Type_f2c(*datatype);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     MPI_Status *c_status;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_SIZEOF_FORTRAN_INTEGER != SIZEOF_INT
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_SIZEOF_FORTRAN_INTEGER != SIZEOF_INT
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     MPI_Status c_status2;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -77,7 +77,7 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt;           translation necessary -- let the underlying functions write
</span><br>
<span class="quotelev3">&gt;&gt;&gt;           directly into the Fortran status */
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_SIZEOF_FORTRAN_INTEGER == SIZEOF_INT
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_SIZEOF_FORTRAN_INTEGER == SIZEOF_INT
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        c_status = (MPI_Status *) status;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #else
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        c_status = &amp;c_status2;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -90,7 +90,7 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                                  c_type,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                                  c_status));
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_SIZEOF_FORTRAN_INTEGER != SIZEOF_INT
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_SIZEOF_FORTRAN_INTEGER != SIZEOF_INT
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     if (MPI_SUCCESS == OMPI_FINT_2_INT(*ierr) &amp;&amp;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         MPI_STATUS_IGNORE != c_status) {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        MPI_Status_c2f(c_status, status);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Modified: trunk/ompi/mpi/f77/file_read_shared_f.c
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ======================================================================
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --- trunk/ompi/mpi/f77/file_read_shared_f.c     (original)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +++ trunk/ompi/mpi/f77/file_read_shared_f.c     2009-05-30 11:54:29
</span><br>
<span class="quotelev3">&gt;&gt;&gt; EDT (Sat, 30 May 2009)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -65,7 +65,7 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     MPI_File c_fh = MPI_File_f2c(*fh);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     MPI_Datatype c_type = MPI_Type_f2c(*datatype);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     MPI_Status *c_status;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_SIZEOF_FORTRAN_INTEGER != SIZEOF_INT
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_SIZEOF_FORTRAN_INTEGER != SIZEOF_INT
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     MPI_Status c_status2;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -77,7 +77,7 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt;           translation necessary -- let the underlying functions write
</span><br>
<span class="quotelev3">&gt;&gt;&gt;           directly into the Fortran status */
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_SIZEOF_FORTRAN_INTEGER == SIZEOF_INT
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_SIZEOF_FORTRAN_INTEGER == SIZEOF_INT
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        c_status = (MPI_Status *) status;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #else
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        c_status = &amp;c_status2;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -90,7 +90,7 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                                  c_type,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                                  c_status));
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_SIZEOF_FORTRAN_INTEGER != SIZEOF_INT
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_SIZEOF_FORTRAN_INTEGER != SIZEOF_INT
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     if (MPI_SUCCESS == OMPI_FINT_2_INT(*ierr) &amp;&amp;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         MPI_STATUS_IGNORE != c_status) {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        MPI_Status_c2f(c_status, status);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Modified: trunk/ompi/mpi/f77/file_write_all_end_f.c
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ======================================================================
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --- trunk/ompi/mpi/f77/file_write_all_end_f.c   (original)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +++ trunk/ompi/mpi/f77/file_write_all_end_f.c   2009-05-30 11:54:29
</span><br>
<span class="quotelev3">&gt;&gt;&gt; EDT (Sat, 30 May 2009)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -62,7 +62,7 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                               MPI_Fint *ierr)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          MPI_Status *c_status;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_SIZEOF_FORTRAN_INTEGER != SIZEOF_INT
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_SIZEOF_FORTRAN_INTEGER != SIZEOF_INT
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      MPI_Status c_status2;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      MPI_File c_fh = MPI_File_f2c(*fh);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -77,7 +77,7 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             translation necessary -- let the underlying functions
</span><br>
<span class="quotelev3">&gt;&gt;&gt; write
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             directly into the Fortran status */
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_SIZEOF_FORTRAN_INTEGER == SIZEOF_INT
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_SIZEOF_FORTRAN_INTEGER == SIZEOF_INT
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          c_status = (MPI_Status *) status;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #else
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          c_status = &amp;c_status2;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -86,7 +86,7 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      *ierr = OMPI_INT_2_FINT(MPI_File_write_all_end(c_fh, buf,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; c_status));
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_SIZEOF_FORTRAN_INTEGER != SIZEOF_INT
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_SIZEOF_FORTRAN_INTEGER != SIZEOF_INT
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      if (MPI_SUCCESS == OMPI_FINT_2_INT(*ierr) &amp;&amp;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          MPI_STATUS_IGNORE != c_status) {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          MPI_Status_c2f(c_status, status);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Modified: trunk/ompi/mpi/f77/file_write_all_f.c
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ======================================================================
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --- trunk/ompi/mpi/f77/file_write_all_f.c       (original)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +++ trunk/ompi/mpi/f77/file_write_all_f.c       2009-05-30 11:54:29
</span><br>
<span class="quotelev3">&gt;&gt;&gt; EDT (Sat, 30 May 2009)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -64,7 +64,7 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     MPI_File c_fh = MPI_File_f2c(*fh);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     MPI_Datatype c_type = MPI_Type_f2c(*datatype);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     MPI_Status *c_status;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_SIZEOF_FORTRAN_INTEGER != SIZEOF_INT
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_SIZEOF_FORTRAN_INTEGER != SIZEOF_INT
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     MPI_Status c_status2;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -76,7 +76,7 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt;           translation necessary -- let the underlying functions write
</span><br>
<span class="quotelev3">&gt;&gt;&gt;           directly into the Fortran status */
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_SIZEOF_FORTRAN_INTEGER == SIZEOF_INT
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_SIZEOF_FORTRAN_INTEGER == SIZEOF_INT
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        c_status = (MPI_Status *) status;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #else
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        c_status = &amp;c_status2;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -87,7 +87,7 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                               OMPI_FINT_2_INT(*count),
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                               c_type, c_status));
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_SIZEOF_FORTRAN_INTEGER != SIZEOF_INT
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_SIZEOF_FORTRAN_INTEGER != SIZEOF_INT
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     if (MPI_SUCCESS == OMPI_FINT_2_INT(*ierr) &amp;&amp;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         MPI_STATUS_IGNORE != c_status) {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        MPI_Status_c2f(c_status, status);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Modified: trunk/ompi/mpi/f77/file_write_at_all_end_f.c
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ======================================================================
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --- trunk/ompi/mpi/f77/file_write_at_all_end_f.c        (original)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +++ trunk/ompi/mpi/f77/file_write_at_all_end_f.c        2009-05-30
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 11:54:29 EDT (Sat, 30 May 2009)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -63,7 +63,7 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      MPI_File c_fh = MPI_File_f2c(*fh);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      MPI_Status *c_status;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_SIZEOF_FORTRAN_INTEGER != SIZEOF_INT
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_SIZEOF_FORTRAN_INTEGER != SIZEOF_INT
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      MPI_Status c_status2;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -77,7 +77,7 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             translation necessary -- let the underlying functions
</span><br>
<span class="quotelev3">&gt;&gt;&gt; write
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             directly into the Fortran status */
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_SIZEOF_FORTRAN_INTEGER == SIZEOF_INT
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_SIZEOF_FORTRAN_INTEGER == SIZEOF_INT
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          c_status = (MPI_Status *) status;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #else
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          c_status = &amp;c_status2;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -86,7 +86,7 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      *ierr = OMPI_FINT_2_INT(MPI_File_write_at_all_end(c_fh, buf,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; c_status));
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_SIZEOF_FORTRAN_INTEGER != SIZEOF_INT
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_SIZEOF_FORTRAN_INTEGER != SIZEOF_INT
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      if (MPI_SUCCESS == OMPI_FINT_2_INT(*ierr) &amp;&amp;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          MPI_STATUS_IGNORE != c_status) {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          MPI_Status_c2f(c_status, status);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Modified: trunk/ompi/mpi/f77/file_write_at_all_f.c
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ======================================================================
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --- trunk/ompi/mpi/f77/file_write_at_all_f.c    (original)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +++ trunk/ompi/mpi/f77/file_write_at_all_f.c    2009-05-30 11:54:29
</span><br>
<span class="quotelev3">&gt;&gt;&gt; EDT (Sat, 30 May 2009)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -66,7 +66,7 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     MPI_File c_fh = MPI_File_f2c(*fh);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     MPI_Datatype c_type = MPI_Type_f2c(*datatype);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     MPI_Status *c_status;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_SIZEOF_FORTRAN_INTEGER != SIZEOF_INT
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_SIZEOF_FORTRAN_INTEGER != SIZEOF_INT
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     MPI_Status c_status2;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -78,7 +78,7 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt;           translation necessary -- let the underlying functions write
</span><br>
<span class="quotelev3">&gt;&gt;&gt;           directly into the Fortran status */
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_SIZEOF_FORTRAN_INTEGER == SIZEOF_INT
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_SIZEOF_FORTRAN_INTEGER == SIZEOF_INT
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        c_status = (MPI_Status *) status;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #else
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        c_status = &amp;c_status2;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -92,7 +92,7 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                                  c_type,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                                  c_status));
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_SIZEOF_FORTRAN_INTEGER != SIZEOF_INT
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_SIZEOF_FORTRAN_INTEGER != SIZEOF_INT
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     if (MPI_SUCCESS == OMPI_FINT_2_INT(*ierr) &amp;&amp;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         MPI_STATUS_IGNORE != c_status) {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        MPI_Status_c2f(c_status, status);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Modified: trunk/ompi/mpi/f77/file_write_at_f.c
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ======================================================================
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --- trunk/ompi/mpi/f77/file_write_at_f.c        (original)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +++ trunk/ompi/mpi/f77/file_write_at_f.c        2009-05-30 11:54:29
</span><br>
<span class="quotelev3">&gt;&gt;&gt; EDT (Sat, 30 May 2009)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -64,7 +64,7 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     MPI_File c_fh = MPI_File_f2c(*fh);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     MPI_Datatype c_type = MPI_Type_f2c(*datatype);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     MPI_Status *c_status;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_SIZEOF_FORTRAN_INTEGER != SIZEOF_INT
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_SIZEOF_FORTRAN_INTEGER != SIZEOF_INT
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     MPI_Status c_status2;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -76,7 +76,7 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt;           translation necessary -- let the underlying functions write
</span><br>
<span class="quotelev3">&gt;&gt;&gt;           directly into the Fortran status */
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_SIZEOF_FORTRAN_INTEGER == SIZEOF_INT
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_SIZEOF_FORTRAN_INTEGER == SIZEOF_INT
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        c_status = (MPI_Status *) status;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #else
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        c_status = &amp;c_status2;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -89,7 +89,7 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                               OMPI_FINT_2_INT(*count),
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                               c_type, c_status));
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_SIZEOF_FORTRAN_INTEGER != SIZEOF_INT
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_SIZEOF_FORTRAN_INTEGER != SIZEOF_INT
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     if (MPI_SUCCESS == OMPI_FINT_2_INT(*ierr) &amp;&amp;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         MPI_STATUS_IGNORE != c_status) {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         MPI_Status_c2f(c_status, status);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Modified: trunk/ompi/mpi/f77/file_write_f.c
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ======================================================================
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --- trunk/ompi/mpi/f77/file_write_f.c   (original)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +++ trunk/ompi/mpi/f77/file_write_f.c   2009-05-30 11:54:29 EDT
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (Sat, 30 May 2009)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -64,7 +64,7 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     MPI_File c_fh = MPI_File_f2c(*fh);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     MPI_Datatype c_type = MPI_Type_f2c(*datatype);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     MPI_Status *c_status;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_SIZEOF_FORTRAN_INTEGER != SIZEOF_INT
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_SIZEOF_FORTRAN_INTEGER != SIZEOF_INT
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     MPI_Status c_status2;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -76,7 +76,7 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt;           translation necessary -- let the underlying functions write
</span><br>
<span class="quotelev3">&gt;&gt;&gt;           directly into the Fortran status */
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_SIZEOF_FORTRAN_INTEGER == SIZEOF_INT
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_SIZEOF_FORTRAN_INTEGER == SIZEOF_INT
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        c_status = (MPI_Status *) status;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #else
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        c_status = &amp;c_status2;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -87,7 +87,7 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                            OMPI_FINT_2_INT(*count),
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                            c_type, c_status));
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_SIZEOF_FORTRAN_INTEGER != SIZEOF_INT
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_SIZEOF_FORTRAN_INTEGER != SIZEOF_INT
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     if (MPI_SUCCESS == OMPI_FINT_2_INT(*ierr) &amp;&amp;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         MPI_STATUS_IGNORE != c_status) {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         MPI_Status_c2f(c_status, status);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Modified: trunk/ompi/mpi/f77/file_write_ordered_end_f.c
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ======================================================================
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --- trunk/ompi/mpi/f77/file_write_ordered_end_f.c       (original)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +++ trunk/ompi/mpi/f77/file_write_ordered_end_f.c       2009-05-30
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 11:54:29 EDT (Sat, 30 May 2009)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -63,7 +63,7 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      MPI_File c_fh = MPI_File_f2c(*fh);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      MPI_Status *c_status;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_SIZEOF_FORTRAN_INTEGER != SIZEOF_INT
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_SIZEOF_FORTRAN_INTEGER != SIZEOF_INT
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      MPI_Status c_status2;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -77,7 +77,7 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             translation necessary -- let the underlying functions
</span><br>
<span class="quotelev3">&gt;&gt;&gt; write
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             directly into the Fortran status */
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_SIZEOF_FORTRAN_INTEGER == SIZEOF_INT
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_SIZEOF_FORTRAN_INTEGER == SIZEOF_INT
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          c_status = (MPI_Status *) status;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #else
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          c_status = &amp;c_status2;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -86,7 +86,7 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      *ierr = OMPI_INT_2_FINT(MPI_File_write_ordered_end(c_fh, buf,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; c_status));
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_SIZEOF_FORTRAN_INTEGER != SIZEOF_INT
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_SIZEOF_FORTRAN_INTEGER != SIZEOF_INT
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      if (MPI_SUCCESS == OMPI_FINT_2_INT(*ierr) &amp;&amp;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          MPI_STATUS_IGNORE != c_status) {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          MPI_Status_c2f(c_status, status);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Modified: trunk/ompi/mpi/f77/file_write_ordered_f.c
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ======================================================================
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --- trunk/ompi/mpi/f77/file_write_ordered_f.c   (original)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +++ trunk/ompi/mpi/f77/file_write_ordered_f.c   2009-05-30 11:54:29
</span><br>
<span class="quotelev3">&gt;&gt;&gt; EDT (Sat, 30 May 2009)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -65,7 +65,7 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     MPI_File c_fh = MPI_File_f2c(*fh);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     MPI_Datatype c_type = MPI_Type_f2c(*datatype);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     MPI_Status *c_status;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_SIZEOF_FORTRAN_INTEGER != SIZEOF_INT
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_SIZEOF_FORTRAN_INTEGER != SIZEOF_INT
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     MPI_Status c_status2;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -77,7 +77,7 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt;           translation necessary -- let the underlying functions write
</span><br>
<span class="quotelev3">&gt;&gt;&gt;           directly into the Fortran status */
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_SIZEOF_FORTRAN_INTEGER == SIZEOF_INT
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_SIZEOF_FORTRAN_INTEGER == SIZEOF_INT
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        c_status = (MPI_Status *) status;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #else
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        c_status = &amp;c_status2;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -90,7 +90,7 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                                    c_type,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                                    c_status));
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_SIZEOF_FORTRAN_INTEGER != SIZEOF_INT
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_SIZEOF_FORTRAN_INTEGER != SIZEOF_INT
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      if (MPI_SUCCESS == OMPI_FINT_2_INT(*ierr) &amp;&amp;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          MPI_STATUS_IGNORE != c_status) {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          MPI_Status_c2f(c_status, status);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Modified: trunk/ompi/mpi/f77/file_write_shared_f.c
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ======================================================================
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --- trunk/ompi/mpi/f77/file_write_shared_f.c    (original)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +++ trunk/ompi/mpi/f77/file_write_shared_f.c    2009-05-30 11:54:29
</span><br>
<span class="quotelev3">&gt;&gt;&gt; EDT (Sat, 30 May 2009)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -65,7 +65,7 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     MPI_File c_fh = MPI_File_f2c(*fh);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     MPI_Datatype c_type = MPI_Type_f2c(*datatype);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     MPI_Status *c_status;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_SIZEOF_FORTRAN_INTEGER != SIZEOF_INT
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_SIZEOF_FORTRAN_INTEGER != SIZEOF_INT
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     MPI_Status c_status2;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -77,7 +77,7 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt;           translation necessary -- let the underlying functions write
</span><br>
<span class="quotelev3">&gt;&gt;&gt;           directly into the Fortran status */
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_SIZEOF_FORTRAN_INTEGER == SIZEOF_INT
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_SIZEOF_FORTRAN_INTEGER == SIZEOF_INT
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        c_status = (MPI_Status *) status;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #else
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        c_status = &amp;c_status2;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -90,7 +90,7 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                                   c_type,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                                   c_status));
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_SIZEOF_FORTRAN_INTEGER != SIZEOF_INT
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_SIZEOF_FORTRAN_INTEGER != SIZEOF_INT
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      if (MPI_SUCCESS == OMPI_FINT_2_INT(*ierr) &amp;&amp;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          MPI_STATUS_IGNORE != c_status) {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          MPI_Status_c2f(c_status, status);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Modified: trunk/ompi/mpi/f77/fint_2_int.h
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ======================================================================
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --- trunk/ompi/mpi/f77/fint_2_int.h     (original)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +++ trunk/ompi/mpi/f77/fint_2_int.h     2009-05-30 11:54:29 EDT
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (Sat, 30 May 2009)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -27,7 +27,7 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   * Define MACROS to take account of different size of MPI_Fint from
</span><br>
<span class="quotelev3">&gt;&gt;&gt; int
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   */
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_SIZEOF_FORTRAN_INTEGER == SIZEOF_INT
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_SIZEOF_FORTRAN_INTEGER == SIZEOF_INT
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    #define OMPI_ARRAY_NAME_DECL(a)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    #define OMPI_2_DIM_ARRAY_NAME_DECL(a, dim2)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    #define OMPI_SINGLE_NAME_DECL(a)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -43,7 +43,7 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    #define OMPI_SINGLE_INT_2_FINT(in)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    #define OMPI_ARRAY_INT_2_FINT(in, n)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#elif OMPI_SIZEOF_FORTRAN_INTEGER &gt; SIZEOF_INT
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#elif OPAL_SIZEOF_FORTRAN_INTEGER &gt; SIZEOF_INT
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    #define OMPI_ARRAY_NAME_DECL(a) int *c_##a
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    #define OMPI_2_DIM_ARRAY_NAME_DECL(a, dim2) int (*c_##a)[dim2],
</span><br>
<span class="quotelev3">&gt;&gt;&gt; dim2_index
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    #define OMPI_SINGLE_NAME_DECL(a) int c_##a
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -156,7 +156,7 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   * Define MACROS to take account of different size of logical from
</span><br>
<span class="quotelev3">&gt;&gt;&gt; int
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   */
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_SIZEOF_FORTRAN_LOGICAL == SIZEOF_INT
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_SIZEOF_FORTRAN_LOGICAL == SIZEOF_INT
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #  define OMPI_LOGICAL_NAME_DECL(in)               /* Not needed
</span><br>
<span class="quotelev3">&gt;&gt;&gt; for int==logical */
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #  define OMPI_LOGICAL_NAME_CONVERT(in)        in  /* Not needed
</span><br>
<span class="quotelev3">&gt;&gt;&gt; for int==logical */
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #  define OMPI_LOGICAL_SINGLE_NAME_CONVERT(in) in /* Not needed for
</span><br>
<span class="quotelev3">&gt;&gt;&gt; int==logical */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -165,7 +165,7 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #  define OMPI_ARRAY_LOGICAL_2_INT_ALLOC(in,n)     /* Not needed
</span><br>
<span class="quotelev3">&gt;&gt;&gt; for int==logical */
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #  define OMPI_ARRAY_LOGICAL_2_INT_CLEANUP(in)     /* Not needed
</span><br>
<span class="quotelev3">&gt;&gt;&gt; for int==logical */
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#  if OMPI_FORTRAN_VALUE_TRUE == 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#  if OPAL_FORTRAN_VALUE_TRUE == 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #    define OMPI_FORTRAN_MUST_CONVERT_LOGICAL_2_INT    0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #    define OMPI_LOGICAL_2_INT(a) a
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #    define OMPI_INT_2_LOGICAL(a) a
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -175,7 +175,7 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #  else
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #    define OMPI_FORTRAN_MUST_CONVERT_LOGICAL_2_INT    1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #    define OMPI_LOGICAL_2_INT(a) ((a)==0? 0 : 1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#    define OMPI_INT_2_LOGICAL(a) ((a)==0? 0 :
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OMPI_FORTRAN_VALUE_TRUE)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#    define OMPI_INT_2_LOGICAL(a) ((a)==0? 0 :
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OPAL_FORTRAN_VALUE_TRUE)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #    define OMPI_SINGLE_INT_2_LOGICAL(a)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; *a=OMPI_INT_2_LOGICAL(OMPI_LOGICAL_NAME_CONVERT(*a))
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #    define OMPI_ARRAY_LOGICAL_2_INT(in, n) do { \
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         int converted_n = (int)(n); \
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -208,13 +208,13 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #  define OMPI_ARRAY_LOGICAL_2_INT_CLEANUP(in) \
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        free(OMPI_LOGICAL_ARRAY_NAME_CONVERT(in))
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#  if OMPI_FORTRAN_VALUE_TRUE == 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#  if OPAL_FORTRAN_VALUE_TRUE == 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #    define OMPI_LOGICAL_2_INT(a) (int)a
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #    define OMPI_INT_2_LOGICAL(a) (MPI_Flogical)a
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #    define OMPI_SINGLE_INT_2_LOGICAL(a)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; *a=(OMPI_INT_2_LOGICAL(OMPI_LOGICAL_NAME_CONVERT(a)))
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #  else
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #    define OMPI_LOGICAL_2_INT(a) ((a)==0? 0 : 1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#    define OMPI_INT_2_LOGICAL(a) ((a)==0? 0 :
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OMPI_FORTRAN_VALUE_TRUE)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#    define OMPI_INT_2_LOGICAL(a) ((a)==0? 0 :
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OPAL_FORTRAN_VALUE_TRUE)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #    define OMPI_SINGLE_INT_2_LOGICAL(a)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; *a=(OMPI_INT_2_LOGICAL(OMPI_LOGICAL_NAME_CONVERT(a)))
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #  endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #  define OMPI_ARRAY_LOGICAL_2_INT(in, n) do { \
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -231,7 +231,7 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         } \
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       }  while (0) \
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       /* free(OMPI_LOGICAL_ARRAY_NAME_CONVERT(in)) * No Need to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; free, here */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#endif /* OMPI_SIZEOF_FORTRAN_LOGICAL */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#endif /* OPAL_SIZEOF_FORTRAN_LOGICAL */
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #endif /* OMPI_FINT_2_INT_H */
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Modified: trunk/ompi/mpi/f77/iprobe_f.c
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ======================================================================
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --- trunk/ompi/mpi/f77/iprobe_f.c       (original)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +++ trunk/ompi/mpi/f77/iprobe_f.c       2009-05-30 11:54:29 EDT
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (Sat, 30 May 2009)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -64,7 +64,7 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      MPI_Status *c_status;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      MPI_Comm c_comm;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_SIZEOF_FORTRAN_INTEGER != SIZEOF_INT
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_SIZEOF_FORTRAN_INTEGER != SIZEOF_INT
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      MPI_Status c_status2;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      OMPI_LOGICAL_NAME_DECL(flag);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -80,7 +80,7 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             translation necessary -- let the underlying functions
</span><br>
<span class="quotelev3">&gt;&gt;&gt; write
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             directly into the Fortran status */
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_SIZEOF_FORTRAN_INTEGER == SIZEOF_INT
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_SIZEOF_FORTRAN_INTEGER == SIZEOF_INT
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          c_status = (MPI_Status *) status;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #else
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          c_status = &amp;c_status2;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -93,7 +93,7 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                         c_status));
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      if (MPI_SUCCESS == OMPI_FINT_2_INT(*ierr)) {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          OMPI_SINGLE_INT_2_LOGICAL(flag);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_SIZEOF_FORTRAN_INTEGER != SIZEOF_INT
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_SIZEOF_FORTRAN_INTEGER != SIZEOF_INT
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          if (MPI_STATUS_IGNORE != c_status) {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;              MPI_Status_c2f(c_status, status);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          }
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Modified: trunk/ompi/mpi/f77/probe_f.c
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ======================================================================
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --- trunk/ompi/mpi/f77/probe_f.c        (original)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +++ trunk/ompi/mpi/f77/probe_f.c        2009-05-30 11:54:29 EDT
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (Sat, 30 May 2009)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -63,7 +63,7 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      MPI_Status *c_status;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      MPI_Comm c_comm;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_SIZEOF_FORTRAN_INTEGER != SIZEOF_INT
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_SIZEOF_FORTRAN_INTEGER != SIZEOF_INT
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      MPI_Status c_status2;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -78,7 +78,7 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             translation necessary -- let the underlying functions
</span><br>
<span class="quotelev3">&gt;&gt;&gt; write
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             directly into the Fortran status */
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_SIZEOF_FORTRAN_INTEGER == SIZEOF_INT
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_SIZEOF_FORTRAN_INTEGER == SIZEOF_INT
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          c_status = (MPI_Status *) status;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #else
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          c_status = &amp;c_status2;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -89,7 +89,7 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                       OMPI_FINT_2_INT(*tag),
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                       c_comm, c_status));
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_SIZEOF_FORTRAN_INTEGER != SIZEOF_INT
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_SIZEOF_FORTRAN_INTEGER != SIZEOF_INT
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      if (MPI_SUCCESS == OMPI_FINT_2_INT(*ierr) &amp;&amp;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          MPI_STATUS_IGNORE != c_status) {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          MPI_Status_c2f(c_status, status);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Modified: trunk/ompi/mpi/f77/recv_f.c
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ======================================================================
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --- trunk/ompi/mpi/f77/recv_f.c (original)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +++ trunk/ompi/mpi/f77/recv_f.c 2009-05-30 11:54:29 EDT (Sat, 30 May
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 2009)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -64,7 +64,7 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  MPI_Fint *status, MPI_Fint *ierr)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     MPI_Status *c_status;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_SIZEOF_FORTRAN_INTEGER != SIZEOF_INT
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_SIZEOF_FORTRAN_INTEGER != SIZEOF_INT
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     MPI_Status c_status2;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     MPI_Comm c_comm = MPI_Comm_f2c(*comm);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -78,7 +78,7 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt;           translation necessary -- let the underlying functions write
</span><br>
<span class="quotelev3">&gt;&gt;&gt;           directly into the Fortran status */
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_SIZEOF_FORTRAN_INTEGER == SIZEOF_INT
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_SIZEOF_FORTRAN_INTEGER == SIZEOF_INT
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        c_status = (MPI_Status *) status;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #else
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        c_status = &amp;c_status2;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -90,7 +90,7 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                      c_type, OMPI_FINT_2_INT(*source),
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                      OMPI_FINT_2_INT(*tag), c_comm,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                      c_status));
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_SIZEOF_FORTRAN_INTEGER != SIZEOF_INT
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_SIZEOF_FORTRAN_INTEGER != SIZEOF_INT
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     if (MPI_SUCCESS == OMPI_FINT_2_INT(*ierr) &amp;&amp;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         MPI_STATUS_IGNORE != c_status) {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         MPI_Status_c2f(c_status, status);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Modified: trunk/ompi/mpi/f77/testsome_f.c
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ======================================================================
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --- trunk/ompi/mpi/f77/testsome_f.c     (original)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +++ trunk/ompi/mpi/f77/testsome_f.c     2009-05-30 11:54:29 EDT
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (Sat, 30 May 2009)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -71,7 +71,7 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      MPI_Request *c_req;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      MPI_Status *c_status;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      int i;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_SIZEOF_FORTRAN_INTEGER != SIZEOF_INT
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_SIZEOF_FORTRAN_INTEGER != SIZEOF_INT
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      int int_c;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      OMPI_SINGLE_NAME_DECL(outcount);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -97,7 +97,7 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OMPI_ARRAY_NAME_CONVERT(array_of_indices),
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                           c_status));
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#if OMPI_SIZEOF_FORTRAN_INTEGER != SIZEOF_INT
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_SIZEOF_FORTRAN_INTEGER != SIZEOF_INT
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      OMPI_SINGLE_INT_2_FINT(outcount);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      int_c = OMPI_FINT_2_INT(*incount);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      OMPI_ARRAY_INT_2_FINT(array_of_indices, int_c);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Modified: trunk/ompi/mpi/f90/fortran_sizes.h.in
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ======================================================================
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --- trunk/ompi/mpi/f90/fortran_sizes.h.in       (original)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +++ trunk/ompi/mpi/f90/fortran_sizes.h.in       2009-05-30 11:54:29
</span><br>
<span class="quotelev3">&gt;&gt;&gt; EDT (Sat, 30 May 2009)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -19,36 +19,36 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  ! This file is used by scripts/mpi_sizeof.f90.sh (and therefore
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpi_sizeof.f90)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -integer :: OMPI_SIZEOF_F90_LOGICAL
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +integer :: OPAL_SIZEOF_F90_LOGICAL
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -integer :: OMPI_SIZEOF_F90_INT1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -integer :: OMPI_SIZEOF_F90_INT2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -integer :: OMPI_SIZEOF_F90_INT4
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -integer :: OMPI_SIZEOF_F90_INT8
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -integer :: OMPI_SIZEOF_F90_INT16
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -integer :: OMPI_SIZEOF_F90_REAL2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -integer :: OMPI_SIZEOF_F90_REAL4
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -integer :: OMPI_SIZEOF_F90_REAL8
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -integer :: OMPI_SIZEOF_F90_REAL16
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -integer :: OMPI_SIZEOF_F90_COMPLEX8
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -integer :: OMPI_SIZEOF_F90_COMPLEX16
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -integer :: OMPI_SIZEOF_F90_COMPLEX32
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -parameter(OMPI_SIZEOF_F90_LOGICAL = @OMPI_SIZEOF_F90_LOGICAL@)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -parameter(OMPI_SIZEOF_F90_INT1 = @OMPI_SIZEOF_F90_INTEGER1@)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -parameter(OMPI_SIZEOF_F90_INT2 = @OMPI_SIZEOF_F90_INTEGER2@)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -parameter(OMPI_SIZEOF_F90_INT4 = @OMPI_SIZEOF_F90_INTEGER4@)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -parameter(OMPI_SIZEOF_F90_INT8 = @OMPI_SIZEOF_F90_INTEGER8@)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -parameter(OMPI_SIZEOF_F90_INT16 = @OMPI_SIZEOF_F90_INTEGER16@)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -parameter(OMPI_SIZEOF_F90_REAL2 = @OMPI_SIZEOF_F90_REAL2@)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -parameter(OMPI_SIZEOF_F90_REAL4 = @OMPI_SIZEOF_F90_REAL4@)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -parameter(OMPI_SIZEOF_F90_REAL8 = @OMPI_SIZEOF_F90_REAL8@)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -parameter(OMPI_SIZEOF_F90_REAL16 = @OMPI_SIZEOF_F90_REAL16@)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -parameter(OMPI_SIZEOF_F90_COMPLEX8 = @OMPI_SIZEOF_F90_COMPLEX8@)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -parameter(OMPI_SIZEOF_F90_COMPLEX16 = @OMPI_SIZEOF_F90_COMPLEX16@)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -parameter(OMPI_SIZEOF_F90_COMPLEX32 = @OMPI_SIZEOF_F90_COMPLEX32@)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +integer :: OPAL_SIZEOF_F90_INT1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +integer :: OPAL_SIZEOF_F90_INT2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +integer :: OPAL_SIZEOF_F90_INT4
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +integer :: OPAL_SIZEOF_F90_INT8
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +integer :: OPAL_SIZEOF_F90_INT16
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +integer :: OPAL_SIZEOF_F90_REAL2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +integer :: OPAL_SIZEOF_F90_REAL4
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +integer :: OPAL_SIZEOF_F90_REAL8
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +integer :: OPAL_SIZEOF_F90_REAL16
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +integer :: OPAL_SIZEOF_F90_COMPLEX8
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +integer :: OPAL_SIZEOF_F90_COMPLEX16
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +integer :: OPAL_SIZEOF_F90_COMPLEX32
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +parameter(OPAL_SIZEOF_F90_LOGICAL = @OPAL_SIZEOF_F90_LOGICAL@)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +parameter(OPAL_SIZEOF_F90_INT1 = @OPAL_SIZEOF_F90_INTEGER1@)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +parameter(OPAL_SIZEOF_F90_INT2 = @OPAL_SIZEOF_F90_INTEGER2@)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +parameter(OPAL_SIZEOF_F90_INT4 = @OPAL_SIZEOF_F90_INTEGER4@)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +parameter(OPAL_SIZEOF_F90_INT8 = @OPAL_SIZEOF_F90_INTEGER8@)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +parameter(OPAL_SIZEOF_F90_INT16 = @OPAL_SIZEOF_F90_INTEGER16@)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +parameter(OPAL_SIZEOF_F90_REAL2 = @OPAL_SIZEOF_F90_REAL2@)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +parameter(OPAL_SIZEOF_F90_REAL4 = @OPAL_SIZEOF_F90_REAL4@)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +parameter(OPAL_SIZEOF_F90_REAL8 = @OPAL_SIZEOF_F90_REAL8@)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +parameter(OPAL_SIZEOF_F90_REAL16 = @OPAL_SIZEOF_F90_REAL16@)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +parameter(OPAL_SIZEOF_F90_COMPLEX8 = @OPAL_SIZEOF_F90_COMPLEX8@)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +parameter(OPAL_SIZEOF_F90_COMPLEX16 = @OPAL_SIZEOF_F90_COMPLEX16@)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +parameter(OPAL_SIZEOF_F90_COMPLEX32 = @OPAL_SIZEOF_F90_COMPLEX32@)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Modified: trunk/ompi/mpi/f90/scripts/mpi_sizeof.f90.sh
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ======================================================================
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --- trunk/ompi/mpi/f90/scripts/mpi_sizeof.f90.sh        (original)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +++ trunk/ompi/mpi/f90/scripts/mpi_sizeof.f90.sh        2009-05-30
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 11:54:29 EDT (Sat, 30 May 2009)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -32,7 +32,7 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      echo &quot;  logical*${kind}, intent(in) :: x&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      echo &quot;  integer, intent(out) :: size&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      echo &quot;  integer, intent(out) :: ierr&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -    echo &quot;  size = OMPI_SIZEOF_F90_LOGICAL${kind}&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +    echo &quot;  size = OPAL_SIZEOF_F90_LOGICAL${kind}&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      echo &quot;  ierr = 0&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      echo &quot;end subroutine ${proc}&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      echo
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -47,7 +47,7 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      echo &quot;  integer*${kind}, intent(in) :: x&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      echo &quot;  integer, intent(out) :: size&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      echo &quot;  integer, intent(out) :: ierr&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -    echo &quot;  size = OMPI_SIZEOF_F90_INT${kind}&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +    echo &quot;  size = OPAL_SIZEOF_F90_INT${kind}&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      echo &quot;  ierr = 0&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      echo &quot;end subroutine ${proc}&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      echo
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -62,7 +62,7 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      echo &quot;  real*${kind}, intent(in) :: x&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      echo &quot;  integer, intent(out) :: size&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      echo &quot;  integer, intent(out) :: ierr&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -    echo &quot;  size = OMPI_SIZEOF_F90_REAL${kind}&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +    echo &quot;  size = OPAL_SIZEOF_F90_REAL${kind}&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      echo &quot;  ierr = 0&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      echo &quot;end subroutine ${proc}&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      echo
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -77,7 +77,7 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      echo &quot;  complex*${kind}, intent(in) :: x&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      echo &quot;  integer, intent(out) :: size&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      echo &quot;  integer, intent(out) :: ierr&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -    echo &quot;  size = OMPI_SIZEOF_F90_COMPLEX${kind}&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +    echo &quot;  size = OPAL_SIZEOF_F90_COMPLEX${kind}&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      echo &quot;  ierr = 0&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      echo &quot;end subroutine ${proc}&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      echo
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -103,7 +103,7 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      echo &quot;  logical*${kind}, dimension(${dim}), intent(in) :: x&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      echo &quot;  integer, intent(out) :: size&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      echo &quot;  integer, intent(out) :: ierr&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -    echo &quot;  size = OMPI_SIZEOF_F90_LOGICAL${kind}&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +    echo &quot;  size = OPAL_SIZEOF_F90_LOGICAL${kind}&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      echo &quot;  ierr = 0&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      echo &quot;end subroutine ${proc}&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      echo
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -118,7 +118,7 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      echo &quot;  integer*${kind}, dimension(${dim}), intent(in) :: x&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      echo &quot;  integer, intent(out) :: size&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      echo &quot;  integer, intent(out) :: ierr&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -    echo &quot;  size = OMPI_SIZEOF_F90_INT${kind}&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +    echo &quot;  size = OPAL_SIZEOF_F90_INT${kind}&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      echo &quot;  ierr = 0&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      echo &quot;end subroutine ${proc}&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      echo
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -133,7 +133,7 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      echo &quot;  real*${kind}, dimension(${dim}), intent(in) :: x&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      echo &quot;  integer, intent(out) :: size&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      echo &quot;  integer, intent(out) :: ierr&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -    echo &quot;  size = OMPI_SIZEOF_F90_REAL${kind}&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +    echo &quot;  size = OPAL_SIZEOF_F90_REAL${kind}&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      echo &quot;  ierr = 0&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      echo &quot;end subroutine ${proc}&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      echo
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -148,7 +148,7 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      echo &quot;  complex*${kind}, dimension(${dim}), intent(in) :: x&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      echo &quot;  integer, intent(out) :: size&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      echo &quot;  integer, intent(out) :: ierr&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -    echo &quot;  size = OMPI_SIZEOF_F90_COMPLEX${kind}&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +    echo &quot;  size = OPAL_SIZEOF_F90_COMPLEX${kind}&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      echo &quot;  ierr = 0&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      echo &quot;end subroutine ${proc}&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      echo
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Modified: trunk/ompi/request/request.c
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ======================================================================
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --- trunk/ompi/request/request.c        (original)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +++ trunk/ompi/request/request.c        2009-05-30 11:54:29 EDT
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (Sat, 30 May 2009)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -103,7 +103,7 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      OBJ_CONSTRUCT(&amp;ompi_request_null, ompi_request_t);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      OBJ_CONSTRUCT(&amp;ompi_request_f_to_c_table, opal_pointer_array_t);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      if( OPAL_SUCCESS !=
</span><br>
<span class="quotelev3">&gt;&gt;&gt; opal_pointer_array_init(&amp;ompi_request_f_to_c_table,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -                                                0,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OMPI_FORTRAN_HANDLE_MAX, 64) ) {
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +                                                0,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OPAL_FORTRAN_HANDLE_MAX, 64) ) {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          return OMPI_ERROR;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      }
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      ompi_request_null.request.req_type = OMPI_REQUEST_NULL;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Modified: trunk/ompi/tools/ompi_info/param.cc
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ======================================================================
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --- trunk/ompi/tools/ompi_info/param.cc (original)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +++ trunk/ompi/tools/ompi_info/param.cc 2009-05-30 11:54:29 EDT
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (Sat, 30 May 2009)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -584,10 +584,10 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      out(&quot;C double size&quot;, &quot;compiler:c:sizeof:double&quot;, sizeof(double));
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      out(&quot;C pointer size&quot;, &quot;compiler:c:sizeof:pointer&quot;, sizeof(void
</span><br>
<span class="quotelev3">&gt;&gt;&gt; *));
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      out(&quot;C char align&quot;, &quot;compiler:c:align:char&quot;,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OPAL_ALIGNMENT_CHAR);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -    out(&quot;C bool align&quot;, &quot;compiler:c:align:bool&quot;,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OMPI_ALIGNMENT_CXX_BOOL);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +    out(&quot;C bool align&quot;, &quot;compiler:c:align:bool&quot;,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OPAL_ALIGNMENT_CXX_BOOL);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      out(&quot;C int align&quot;, &quot;compiler:c:align:int&quot;, OPAL_ALIGNMENT_INT);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -    out(&quot;C float align&quot;, &quot;compiler:c:align:float&quot;,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OMPI_ALIGNMENT_FLOAT);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -    out(&quot;C double align&quot;, &quot;compiler:c:align:double&quot;,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OMPI_ALIGNMENT_DOUBLE);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +    out(&quot;C float align&quot;, &quot;compiler:c:align:float&quot;,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OPAL_ALIGNMENT_FLOAT);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +    out(&quot;C double align&quot;, &quot;compiler:c:align:double&quot;,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OPAL_ALIGNMENT_DOUBLE);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    }
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    out(&quot;C++ compiler&quot;, &quot;compiler:cxx:command&quot;, OMPI_CXX);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -605,115 +605,115 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      // Will always have the size of Fortran integer
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      out(&quot;Fort integer size&quot;, &quot;compiler:fortran:sizeof:integer&quot;,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -        OMPI_SIZEOF_FORTRAN_INTEGER);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +        OPAL_SIZEOF_FORTRAN_INTEGER);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      out(&quot;Fort logical size&quot;, &quot;compiler:fortran:sizeof:logical&quot;,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -        OMPI_SIZEOF_FORTRAN_LOGICAL);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +        OPAL_SIZEOF_FORTRAN_LOGICAL);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      out(&quot;Fort logical value true&quot;, &quot;compiler:fortran:value:true&quot;,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -        OMPI_FORTRAN_VALUE_TRUE);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +        OPAL_FORTRAN_VALUE_TRUE);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      // May or may not have the other Fortran sizes
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      if (OMPI_WANT_F77_BINDINGS || OMPI_WANT_F90_BINDINGS) {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        out(&quot;Fort have integer1&quot;, &quot;compiler:fortran:have:integer1&quot;,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -          OMPI_HAVE_FORTRAN_INTEGER1 ? &quot;yes&quot; : &quot;no&quot;);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +          OPAL_HAVE_FORTRAN_INTEGER1 ? &quot;yes&quot; : &quot;no&quot;);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        out(&quot;Fort have integer2&quot;, &quot;compiler:fortran:have:integer2&quot;,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -          OMPI_HAVE_FORTRAN_INTEGER2 ? &quot;yes&quot; : &quot;no&quot;);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +          OPAL_HAVE_FORTRAN_INTEGER2 ? &quot;yes&quot; : &quot;no&quot;);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        out(&quot;Fort have integer4&quot;, &quot;compiler:fortran:have:integer4&quot;,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -          OMPI_HAVE_FORTRAN_INTEGER4 ? &quot;yes&quot; : &quot;no&quot;);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +          OPAL_HAVE_FORTRAN_INTEGER4 ? &quot;yes&quot; : &quot;no&quot;);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        out(&quot;Fort have integer8&quot;, &quot;compiler:fortran:have:integer8&quot;,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -          OMPI_HAVE_FORTRAN_INTEGER8 ? &quot;yes&quot; : &quot;no&quot;);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +          OPAL_HAVE_FORTRAN_INTEGER8 ? &quot;yes&quot; : &quot;no&quot;);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        out(&quot;Fort have integer16&quot;, &quot;compiler:fortran:have:integer16&quot;,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -          OMPI_HAVE_FORTRAN_INTEGER16 ? &quot;yes&quot; : &quot;no&quot;);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +          OPAL_HAVE_FORTRAN_INTEGER16 ? &quot;yes&quot; : &quot;no&quot;);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        out(&quot;Fort have real4&quot;, &quot;compiler:fortran:have:real4&quot;,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -          OMPI_HAVE_FORTRAN_REAL4 ? &quot;yes&quot; : &quot;no&quot;);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +          OPAL_HAVE_FORTRAN_REAL4 ? &quot;yes&quot; : &quot;no&quot;);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        out(&quot;Fort have real8&quot;, &quot;compiler:fortran:have:real8&quot;,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -          OMPI_HAVE_FORTRAN_REAL8 ? &quot;yes&quot; : &quot;no&quot;);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +          OPAL_HAVE_FORTRAN_REAL8 ? &quot;yes&quot; : &quot;no&quot;);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        out(&quot;Fort have real16&quot;, &quot;compiler:fortran:have:real16&quot;,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -          OMPI_HAVE_FORTRAN_REAL16 &amp;&amp; OMPI_REAL16_MATCHES_C ?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;yes&quot; : &quot;no&quot;);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +          OPAL_HAVE_FORTRAN_REAL16 &amp;&amp; OPAL_REAL16_MATCHES_C ?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;yes&quot; : &quot;no&quot;);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        out(&quot;Fort have complex8&quot;, &quot;compiler:fortran:have:complex8&quot;,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -          OMPI_HAVE_FORTRAN_COMPLEX8 ? &quot;yes&quot; : &quot;no&quot;);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +          OPAL_HAVE_FORTRAN_COMPLEX8 ? &quot;yes&quot; : &quot;no&quot;);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        out(&quot;Fort have complex16&quot;, &quot;compiler:fortran:have:complex16&quot;,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -          OMPI_HAVE_FORTRAN_COMPLEX16 ? &quot;yes&quot; : &quot;no&quot;);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +          OPAL_HAVE_FORTRAN_COMPLEX16 ? &quot;yes&quot; : &quot;no&quot;);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        out(&quot;Fort have complex32&quot;, &quot;compiler:fortran:have:complex32&quot;,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -          OMPI_HAVE_FORTRAN_COMPLEX32 &amp;&amp; OMPI_REAL16_MATCHES_C ?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;yes&quot; : &quot;no&quot;);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +          OPAL_HAVE_FORTRAN_COMPLEX32 &amp;&amp; OPAL_REAL16_MATCHES_C ?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;yes&quot; : &quot;no&quot;);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        out(&quot;Fort integer1 size&quot;, &quot;compiler:fortran:sizeof:integer1&quot;,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -          OMPI_HAVE_FORTRAN_INTEGER1 ?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OMPI_SIZEOF_FORTRAN_INTEGER1 : -1);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +          OPAL_HAVE_FORTRAN_INTEGER1 ?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OPAL_SIZEOF_FORTRAN_INTEGER1 : -1);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        out(&quot;Fort integer2 size&quot;, &quot;compiler:fortran:sizeof:integer2&quot;,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -          OMPI_HAVE_FORTRAN_INTEGER2 ?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OMPI_SIZEOF_FORTRAN_INTEGER2 : -1);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +          OPAL_HAVE_FORTRAN_INTEGER2 ?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OPAL_SIZEOF_FORTRAN_INTEGER2 : -1);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        out(&quot;Fort integer4 size&quot;, &quot;compiler:fortran:sizeof:integer4&quot;,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -          OMPI_HAVE_FORTRAN_INTEGER4 ?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OMPI_SIZEOF_FORTRAN_INTEGER4 : -1);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +          OPAL_HAVE_FORTRAN_INTEGER4 ?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OPAL_SIZEOF_FORTRAN_INTEGER4 : -1);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        out(&quot;Fort integer8 size&quot;, &quot;compiler:fortran:sizeof:integer8&quot;,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -          OMPI_HAVE_FORTRAN_INTEGER8 ?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OMPI_SIZEOF_FORTRAN_INTEGER8 : -1);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +          OPAL_HAVE_FORTRAN_INTEGER8 ?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OPAL_SIZEOF_FORTRAN_INTEGER8 : -1);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        out(&quot;Fort integer16 size&quot;, &quot;compiler:fortran:sizeof:integer17&quot;,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -          OMPI_HAVE_FORTRAN_INTEGER16 ?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OMPI_SIZEOF_FORTRAN_INTEGER16 : -1);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +          OPAL_HAVE_FORTRAN_INTEGER16 ?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OPAL_SIZEOF_FORTRAN_INTEGER16 : -1);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        out(&quot;Fort real size&quot;, &quot;compiler:fortran:sizeof:real&quot;,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -          OMPI_SIZEOF_FORTRAN_REAL);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +          OPAL_SIZEOF_FORTRAN_REAL);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        out(&quot;Fort real4 size&quot;, &quot;compiler:fortran:sizeof:real4&quot;,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -          OMPI_HAVE_FORTRAN_REAL4 ? OMPI_SIZEOF_FORTRAN_REAL4 : -1);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +          OPAL_HAVE_FORTRAN_REAL4 ? OPAL_SIZEOF_FORTRAN_REAL4 : -1);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        out(&quot;Fort real8 size&quot;, &quot;compiler:fortran:sizeof:real8&quot;,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -          OMPI_HAVE_FORTRAN_REAL8 ? OMPI_SIZEOF_FORTRAN_REAL8 : -1);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +          OPAL_HAVE_FORTRAN_REAL8 ? OPAL_SIZEOF_FORTRAN_REAL8 : -1);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        out(&quot;Fort real16 size&quot;, &quot;compiler:fortran:sizeof:real17&quot;,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -          OMPI_HAVE_FORTRAN_REAL16 ? OMPI_SIZEOF_FORTRAN_REAL16 :
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -1);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +          OPAL_HAVE_FORTRAN_REAL16 ? OPAL_SIZEOF_FORTRAN_REAL16 :
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -1);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        out(&quot;Fort dbl prec size&quot;,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            &quot;compiler:fortran:sizeof:double_precision&quot;,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -          OMPI_SIZEOF_FORTRAN_REAL);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +          OPAL_SIZEOF_FORTRAN_REAL);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        out(&quot;Fort cplx size&quot;, &quot;compiler:fortran:sizeof:complex&quot;,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -          OMPI_SIZEOF_FORTRAN_REAL);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +          OPAL_SIZEOF_FORTRAN_REAL);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        out(&quot;Fort dbl cplx size&quot;,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            &quot;compiler:fortran:sizeof:double_complex&quot;,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -          OMPI_SIZEOF_FORTRAN_REAL);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +          OPAL_SIZEOF_FORTRAN_REAL);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        out(&quot;Fort cplx8 size&quot;, &quot;compiler:fortran:sizeof:complex8&quot;,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -          OMPI_HAVE_FORTRAN_COMPLEX8 ?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OMPI_SIZEOF_FORTRAN_COMPLEX8 : -1);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +          OPAL_HAVE_FORTRAN_COMPLEX8 ?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OPAL_SIZEOF_FORTRAN_COMPLEX8 : -1);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        out(&quot;Fort cplx16 size&quot;, &quot;compiler:fortran:sizeof:complex16&quot;,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -          OMPI_HAVE_FORTRAN_COMPLEX16 ?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OMPI_SIZEOF_FORTRAN_COMPLEX16 : -1);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +          OPAL_HAVE_FORTRAN_COMPLEX16 ?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OPAL_SIZEOF_FORTRAN_COMPLEX16 : -1);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        out(&quot;Fort cplx32 size&quot;, &quot;compiler:fortran:sizeof:complex32&quot;,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -          OMPI_HAVE_FORTRAN_COMPLEX32 ?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OMPI_SIZEOF_FORTRAN_COMPLEX32 : -1);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +          OPAL_HAVE_FORTRAN_COMPLEX32 ?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OPAL_SIZEOF_FORTRAN_COMPLEX32 : -1);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        out(&quot;Fort integer align&quot;, &quot;compiler:fortran:align:integer&quot;,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -          OMPI_ALIGNMENT_FORTRAN_INTEGER);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +          OPAL_ALIGNMENT_FORTRAN_INTEGER);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        out(&quot;Fort integer1 align&quot;, &quot;compiler:fortran:align:integer1&quot;,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -          OMPI_HAVE_FORTRAN_INTEGER1 ?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OMPI_ALIGNMENT_FORTRAN_INTEGER1 : -1);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +          OPAL_HAVE_FORTRAN_INTEGER1 ?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OPAL_ALIGNMENT_FORTRAN_INTEGER1 : -1);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        out(&quot;Fort integer2 align&quot;, &quot;compiler:fortran:align:integer2&quot;,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -          OMPI_HAVE_FORTRAN_INTEGER2 ?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OMPI_ALIGNMENT_FORTRAN_INTEGER2 : -1);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +          OPAL_HAVE_FORTRAN_INTEGER2 ?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OPAL_ALIGNMENT_FORTRAN_INTEGER2 : -1);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        out(&quot;Fort integer4 align&quot;, &quot;compiler:fortran:align:integer4&quot;,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -          OMPI_HAVE_FORTRAN_INTEGER4 ?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OMPI_ALIGNMENT_FORTRAN_INTEGER4 : -1);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +          OPAL_HAVE_FORTRAN_INTEGER4 ?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OPAL_ALIGNMENT_FORTRAN_INTEGER4 : -1);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        out(&quot;Fort integer8 align&quot;, &quot;compiler:fortran:align:integer8&quot;,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -          OMPI_HAVE_FORTRAN_INTEGER8 ?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OMPI_ALIGNMENT_FORTRAN_INTEGER8 : -1);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +          OPAL_HAVE_FORTRAN_INTEGER8 ?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OPAL_ALIGNMENT_FORTRAN_INTEGER8 : -1);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        out(&quot;Fort integer16 align&quot;, &quot;compiler:fortran:align:integer16&quot;,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -          OMPI_HAVE_FORTRAN_INTEGER16 ?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OMPI_ALIGNMENT_FORTRAN_INTEGER16 : -1);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +          OPAL_HAVE_FORTRAN_INTEGER16 ?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OPAL_ALIGNMENT_FORTRAN_INTEGER16 : -1);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        out(&quot;Fort real align&quot;, &quot;compiler:fortran:align:real&quot;,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -          OMPI_ALIGNMENT_FORTRAN_REAL);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +          OPAL_ALIGNMENT_FORTRAN_REAL);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        out(&quot;Fort real4 align&quot;, &quot;compiler:fortran:align:real4&quot;,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -          OMPI_HAVE_FORTRAN_REAL4 ? OMPI_ALIGNMENT_FORTRAN_REAL4 :
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -1);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +          OPAL_HAVE_FORTRAN_REAL4 ? OPAL_ALIGNMENT_FORTRAN_REAL4 :
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -1);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        out(&quot;Fort real8 align&quot;, &quot;compiler:fortran:align:real8&quot;,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -          OMPI_HAVE_FORTRAN_REAL8 ? OMPI_ALIGNMENT_FORTRAN_REAL8 :
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -1);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +          OPAL_HAVE_FORTRAN_REAL8 ? OPAL_ALIGNMENT_FORTRAN_REAL8 :
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -1);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        out(&quot;Fort real16 align&quot;, &quot;compiler:fortran:align:real16&quot;,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -          OMPI_HAVE_FORTRAN_REAL16 ?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OMPI_ALIGNMENT_FORTRAN_REAL16 : -1);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +          OPAL_HAVE_FORTRAN_REAL16 ?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OPAL_ALIGNMENT_FORTRAN_REAL16 : -1);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        out(&quot;Fort dbl prec align&quot;,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            &quot;compiler:fortran:align:double_precision&quot;,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -          OMPI_ALIGNMENT_FORTRAN_REAL);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +          OPAL_ALIGNMENT_FORTRAN_REAL);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        out(&quot;Fort cplx align&quot;, &quot;compiler:fortran:align:complex&quot;,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -          OMPI_ALIGNMENT_FORTRAN_REAL);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +          OPAL_ALIGNMENT_FORTRAN_REAL);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        out(&quot;Fort dbl cplx align&quot;,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            &quot;compiler:fortran:align:double_complex&quot;,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -          OMPI_ALIGNMENT_FORTRAN_REAL);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +          OPAL_ALIGNMENT_FORTRAN_REAL);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        out(&quot;Fort cplx8 align&quot;, &quot;compiler:fortran:align:complex8&quot;,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -          OMPI_HAVE_FORTRAN_COMPLEX8 ?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OMPI_ALIGNMENT_FORTRAN_COMPLEX8 : -1);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +          OPAL_HAVE_FORTRAN_COMPLEX8 ?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OPAL_ALIGNMENT_FORTRAN_COMPLEX8 : -1);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        out(&quot;Fort cplx16 align&quot;, &quot;compiler:fortran:align:complex16&quot;,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -          OMPI_HAVE_FORTRAN_COMPLEX16 ?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OMPI_ALIGNMENT_FORTRAN_COMPLEX16 : -1);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +          OPAL_HAVE_FORTRAN_COMPLEX16 ?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OPAL_ALIGNMENT_FORTRAN_COMPLEX16 : -1);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        out(&quot;Fort cplx32 align&quot;, &quot;compiler:fortran:align:complex32&quot;,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -          OMPI_HAVE_FORTRAN_COMPLEX32 ?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OMPI_ALIGNMENT_FORTRAN_COMPLEX32 : -1);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +          OPAL_HAVE_FORTRAN_COMPLEX32 ?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OPAL_ALIGNMENT_FORTRAN_COMPLEX32 : -1);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      } else {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        out(&quot;Fort real size&quot;, &quot;compiler:fortran:sizeof:real&quot;,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;skipped&quot;);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Modified: trunk/ompi/win/win.c
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ======================================================================
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --- trunk/ompi/win/win.c        (original)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +++ trunk/ompi/win/win.c        2009-05-30 11:54:29 EDT (Sat, 30 May
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 2009)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -51,7 +51,7 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      /* setup window Fortran array */
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      OBJ_CONSTRUCT(&amp;ompi_mpi_windows, opal_pointer_array_t);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      if( OPAL_SUCCESS != opal_pointer_array_init(&amp;ompi_mpi_windows, 0,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OMPI_FORTRAN_HANDLE_MAX, 64) ) {
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OPAL_FORTRAN_HANDLE_MAX, 64) ) {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          return OMPI_ERROR;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      }
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Modified: trunk/opal/class/opal_bitmap.c
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ======================================================================
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --- trunk/opal/class/opal_bitmap.c      (original)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +++ trunk/opal/class/opal_bitmap.c      2009-05-30 11:54:29 EDT
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (Sat, 30 May 2009)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -133,7 +133,7 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          new_size = (int) new_size_large;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          /*
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -         * No further tests against max_size (or
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OMPI_FORTRAN_HANDLE_MAX) are
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +         * No further tests against max_size (or
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OPAL_FORTRAN_HANDLE_MAX) are
</span><br>
<span class="quotelev3">&gt;&gt;&gt;           * necessary, since we validated above, that the bit
</span><br>
<span class="quotelev3">&gt;&gt;&gt; already is contained!
</span><br>
<span class="quotelev3">&gt;&gt;&gt;           */
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Modified: trunk/opal/class/opal_bitmap.h
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ======================================================================
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --- trunk/opal/class/opal_bitmap.h      (original)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +++ trunk/opal/class/opal_bitmap.h      2009-05-30 11:54:29 EDT
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (Sat, 30 May 2009)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -33,7 +33,7 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   *  To allow these bitmaps to track fortran handles (which MPI
</span><br>
<span class="quotelev3">&gt;&gt;&gt; defines
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   *  to be Fortran INTEGER), we offer a opal_bitmap_set_max_size, so
</span><br>
<span class="quotelev3">&gt;&gt;&gt; that
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   *  the upper layer can ask to never have more than
</span><br>
<span class="quotelev3">&gt;&gt;&gt; - *  OMPI_FORTRAN_HANDLE_MAX, which is min(INT_MAX, fortran INTEGER
</span><br>
<span class="quotelev3">&gt;&gt;&gt; max).
</span><br>
<span class="quotelev3">&gt;&gt;&gt; + *  OPAL_FORTRAN_HANDLE_MAX, which is min(INT_MAX, fortran INTEGER
</span><br>
<span class="quotelev3">&gt;&gt;&gt; max).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   *  Currently the only user of this is ompi/attribute/attribute.c
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   *
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   */
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Modified: trunk/opal/class/opal_pointer_array.c
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ======================================================================
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --- trunk/opal/class/opal_pointer_array.c       (original)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +++ trunk/opal/class/opal_pointer_array.c       2009-05-30 11:54:29
</span><br>
<span class="quotelev3">&gt;&gt;&gt; EDT (Sat, 30 May 2009)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -116,7 +116,7 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          /* need to grow table */
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          if (!grow_table(table,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                          (NULL == table-&gt;addr ? TABLE_INIT : table-
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; size * TABLE_GROW),
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -                        OMPI_FORTRAN_HANDLE_MAX)) {
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +                        OPAL_FORTRAN_HANDLE_MAX)) {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;              OPAL_THREAD_UNLOCK(&amp;(table-&gt;lock));
</span><br>
<span class="quotelev3">&gt;&gt;&gt;              return OPAL_ERR_OUT_OF_RESOURCE;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          }
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -330,7 +330,7 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      }
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      /* We've already established (above) that the arithmetic
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -       below will be less than OMPI_FORTRAN_HANDLE_MAX */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +       below will be less than OPAL_FORTRAN_HANDLE_MAX */
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      new_size_int = (int) new_size;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      table-&gt;number_free += new_size_int - table-&gt;size;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Modified: trunk/opal/include/opal_config_bottom.h
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ======================================================================
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --- trunk/opal/include/opal_config_bottom.h     (original)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +++ trunk/opal/include/opal_config_bottom.h     2009-05-30 11:54:29
</span><br>
<span class="quotelev3">&gt;&gt;&gt; EDT (Sat, 30 May 2009)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -298,15 +298,15 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  alignment */
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #            define false 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #            define true 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#            if SIZEOF_BOOL == SIZEOF_CHAR &amp;&amp;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OMPI_ALIGNMENT_CXX_BOOL == OPAL_ALIGNMENT_CHAR
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#            if SIZEOF_BOOL == SIZEOF_CHAR &amp;&amp;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OPAL_ALIGNMENT_CXX_BOOL == OPAL_ALIGNMENT_CHAR
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  typedef unsigned char bool;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#            elif SIZEOF_BOOL == SIZEOF_SHORT &amp;&amp;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OMPI_ALIGNMENT_CXX_BOOL == OPAL_ALIGNMENT_SHORT
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#            elif SIZEOF_BOOL == SIZEOF_SHORT &amp;&amp;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OPAL_ALIGNMENT_CXX_BOOL == OPAL_ALIGNMENT_SHORT
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  typedef short bool;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#            elif SIZEOF_BOOL == SIZEOF_INT &amp;&amp;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OMPI_ALIGNMENT_CXX_BOOL == OPAL_ALIGNMENT_INT
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#            elif SIZEOF_BOOL == SIZEOF_INT &amp;&amp;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OPAL_ALIGNMENT_CXX_BOOL == OPAL_ALIGNMENT_INT
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  typedef int bool;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#            elif SIZEOF_BOOL == SIZEOF_LONG &amp;&amp;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OMPI_ALIGNMENT_CXX_BOOL == OPAL_ALIGNMENT_LONG
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#            elif SIZEOF_BOOL == SIZEOF_LONG &amp;&amp;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OPAL_ALIGNMENT_CXX_BOOL == OPAL_ALIGNMENT_LONG
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  typedef long bool;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#            elif defined(SIZEOF_LONG_LONG) &amp;&amp;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; defined(OPAL_ALIGNMENT_LONG) &amp;&amp; SIZEOF_BOOL == SIZEOF_LONG &amp;&amp;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OMPI_ALIGNMENT_CXX_BOOL == OPAL_ALIGNMENT_LONG
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#            elif defined(SIZEOF_LONG_LONG) &amp;&amp;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; defined(OPAL_ALIGNMENT_LONG) &amp;&amp; SIZEOF_BOOL == SIZEOF_LONG &amp;&amp;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OPAL_ALIGNMENT_CXX_BOOL == OPAL_ALIGNMENT_LONG
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  typedef long long bool;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #            else
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #                error Cannot find a C type that corresponds to the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; size and alignment of C++ bool!
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Modified: trunk/opal/util/arch.c
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ======================================================================
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --- trunk/opal/util/arch.c      (original)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +++ trunk/opal/util/arch.c      2009-05-30 11:54:29 EDT (Sat, 30 May
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 2009)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -49,11 +49,11 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       * placed here to explain the abstraction break and
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       * indicate that it will eventually be fixed
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -    if (1 == sizeof(ompi_fortran_logical_t) ) {
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +    if (1 == sizeof(opal_fortran_logical_t) ) {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          opal_arch_setmask( me, OPAL_ARCH_LOGICALIS8);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -    } else if (2 == sizeof(ompi_fortran_logical_t)) {
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +    } else if (2 == sizeof(opal_fortran_logical_t)) {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          opal_arch_setmask( me, OPAL_ARCH_LOGICALIS16);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -    } else if (4 == sizeof(ompi_fortran_logical_t)) {
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +    } else if (4 == sizeof(opal_fortran_logical_t)) {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          opal_arch_setmask( me, OPAL_ARCH_LOGICALIS32);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      }
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; svn-full mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; svn-full_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/svn-full">http://www.open-mpi.org/mailman/listinfo.cgi/svn-full</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6159.php">Jeff Squyres: "[OMPI devel] 1.3 branch ob1 brokenness"</a>
<li><strong>Previous message:</strong> <a href="6157.php">Rainer Keller: "Re: [OMPI devel] opal / fortran / Flogical"</a>
<li><strong>In reply to:</strong> <a href="6157.php">Rainer Keller: "Re: [OMPI devel] opal / fortran / Flogical"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6162.php">Jeff Squyres: "Re: [OMPI devel] opal / fortran / Flogical"</a>
<li><strong>Reply:</strong> <a href="6162.php">Jeff Squyres: "Re: [OMPI devel] opal / fortran / Flogical"</a>
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
