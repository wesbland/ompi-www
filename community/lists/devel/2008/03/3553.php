<?
$subject_val = "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r17983";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 27 10:58:24 2008" -->
<!-- isoreceived="20080327145824" -->
<!-- sent="Thu, 27 Mar 2008 10:58:13 -0400" -->
<!-- isosent="20080327145813" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r17983" -->
<!-- id="76A08DBC-4FBF-4809-8714-448CE79EF79E_at_eecs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="C80772DC-3DE1-4DE8-8384-F16D41AF1543_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r17983<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-03-27 10:58:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3554.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r17983"</a>
<li><strong>Previous message:</strong> <a href="3552.php">Ralph H Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r17941"</a>
<li><strong>In reply to:</strong> <a href="3542.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r17983"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3554.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r17983"</a>
<li><strong>Reply:</strong> <a href="3554.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r17983"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Well, technically speaking Interix it's not ... 100% Microsoft, even  
<br>
if now it's somehow integrated in Windows. It does not support the  
<br>
standard Windows environment (such as windows.h) nor the compilers. It  
<br>
come with gcc (3.3), and most of the Unix tools.
<br>
<p>&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Mar 27, 2008, at 6:13 AM, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; Gotcha.  Should this stuff go in ompi/config/ompi_microsoft.m4?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (I don't really care; I just already see a Microsoft file, so I
</span><br>
<span class="quotelev1">&gt; figured I'd ask the question)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mar 26, 2008, at 9:54 PM, George Bosilca wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Interix or SUA or SFU is the POSIX layer integrated with the latest
</span><br>
<span class="quotelev2">&gt;&gt; versions of Windows (such as Vista, and Server 2003). It provide  
</span><br>
<span class="quotelev2">&gt;&gt; fork,
</span><br>
<span class="quotelev2">&gt;&gt; rsh basically most of the tools we need.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; george.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; What's Interix?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Mar 26, 2008, at 7:20 PM, bosilca_at_[hidden] wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Author: bosilca
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Date: 2008-03-26 19:20:33 EDT (Wed, 26 Mar 2008)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; New Revision: 17983
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/17983">https://svn.open-mpi.org/trac/ompi/changeset/17983</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Log:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Add support for Interix.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Added:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; trunk/config/ompi_interix.m4   (contents, props changed)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Text files modified:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; trunk/acinclude.m4 |     1 +
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; trunk/configure.ac |     3 +++
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 2 files changed, 4 insertions(+), 0 deletions(-)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Modified: trunk/acinclude.m4
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; =
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; =
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; =
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; =
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; =
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; =
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; =
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; =
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; =
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; =
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; = 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ===================================================================
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --- trunk/acinclude.m4	(original)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +++ trunk/acinclude.m4	2008-03-26 19:20:33 EDT (Wed, 26 Mar 2008)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; @@ -108,6 +108,7 @@
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; # Include the macros for Windows checking
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; m4_include(config/ompi_microsoft.m4)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +m4_include(config/ompi_interix.m4)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; # The config/mca_no_configure_components.m4 file is generated by
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Added: trunk/config/ompi_interix.m4
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; =
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; =
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; =
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; =
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; =
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; =
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; =
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; =
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; =
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; =
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; = 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ===================================================================
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --- (empty file)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +++ trunk/config/ompi_interix.m4	2008-03-26 19:20:33 EDT (Wed, 26
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Mar 2008)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; @@ -0,0 +1,56 @@
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +dnl -*- shell-script -*-
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +dnl
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +dnl Copyright (c)      2008 The University of Tennessee and The
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; University
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +dnl                         of Tennessee Research Foundation.  All
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; rights
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +dnl                         reserved.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +dnl $COPYRIGHT$
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +dnl
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +dnl Additional copyrights may follow
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +dnl
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +dnl $HEADER$
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +dnl
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ######################################################################
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +#
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +# OMPI_INTERIX
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +#
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +# Detect if the environment is SUA/SFU (i.e. Interix) and modify
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +# the compiling environment accordingly.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +#
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +# USAGE:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +#   OMPI_INTERIX()
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +#
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ######################################################################
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +AC_DEFUN([OMPI_INTERIX],[
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +    AC_MSG_CHECKING(for Interix environment)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +    AC_TRY_COMPILE([],
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +                   [#if !defined(__INTERIX)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +                    #error Normal Unix environment
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +                    #endif],
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +                   is_interix=yes,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +                   is_interix=no)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +    AC_MSG_RESULT([$is_interix])
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +    if test &quot;$is_interix&quot; = &quot;yes&quot;; then
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +        ompi_show_subtitle &quot;Interix detection&quot;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +        if ! test -d /usr/include/port; then
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +            AC_MSG_WARN([Compiling Open MPI under Interix require
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; an up-to-date])
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +            AC_MSG_WARN([version of libport. Please ask your  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; system
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; administrator])
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +            AC_MSG_WARN([to install it (pkg_update -L libport).])
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +            AC_MSG_ERROR([*** Cannot continue])
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +        fi
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +        #
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +        # These are the minimum requirements for Interix ...
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +        #
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +        AC_MSG_WARN([    -lport was added to the linking flags])
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +        LDFLAGS=&quot;-lport $LDFLAGS&quot;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +        AC_MSG_WARN([    -D_ALL_SOURCE -D_USE_LIBPORT was added to
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; the compilation flags])
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +        CFLAGS=&quot;-D_ALL_SOURCE -D_USE_LIBPORT -I/usr/include/port
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; $CFLAGS&quot;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +        CPPFLAGS=&quot;-D_ALL_SOURCE -D_USE_LIBPORT -I/usr/include/port
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; $CPPFLAGS&quot;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +        CXXFLAGS=&quot;-D_ALL_SOURCE -D_USE_LIBPORT -I/usr/include/port
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; $CXXFLAGS&quot;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +    fi
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +])
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Modified: trunk/configure.ac
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; =
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; =
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; =
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; =
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; =
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; =
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; =
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; =
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; =
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; =
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; = 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ===================================================================
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --- trunk/configure.ac	(original)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +++ trunk/configure.ac	2008-03-26 19:20:33 EDT (Wed, 26 Mar 2008)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; @@ -192,6 +192,9 @@
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; AM_CONDITIONAL(OMPI_NEED_WINDOWS_REPLACEMENTS,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;              test &quot;$ompi_cv_c_compiler_vendor&quot; = &quot;microsoft&quot; )
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +# Do all Interix detections if necessary
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +OMPI_INTERIX
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; # Does the compiler support &quot;ident&quot;-like constructs?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; OMPI_CHECK_IDENT([CC], [CFLAGS], [c], [C])
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; svn-full mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; svn-full_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/svn-full">http://www.open-mpi.org/mailman/listinfo.cgi/svn-full</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
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
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Cisco Systems
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
<p><p>
<br><hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-3553/smime.p7s">smime.p7s</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3554.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r17983"</a>
<li><strong>Previous message:</strong> <a href="3552.php">Ralph H Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r17941"</a>
<li><strong>In reply to:</strong> <a href="3542.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r17983"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3554.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r17983"</a>
<li><strong>Reply:</strong> <a href="3554.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r17983"</a>
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
