<?
$subject_val = "[OMPI users] OpenMPI 1.8.4 and hwloc in Fedora 14 using a beta gcc 5.0 compiler.";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec 11 17:41:17 2014" -->
<!-- isoreceived="20141211224117" -->
<!-- sent="Thu, 11 Dec 2014 19:40:10 -0300 (ART)" -->
<!-- isosent="20141211224010" -->
<!-- name="Jorge D'Elia" -->
<!-- email="jdelia_at_[hidden]" -->
<!-- subject="[OMPI users] OpenMPI 1.8.4 and hwloc in Fedora 14 using a beta gcc 5.0 compiler." -->
<!-- id="1789189459.11274.1418337610388.JavaMail.zimbra_at_intec.unl.edu.ar" -->
<!-- charset="utf-8" -->
<!-- inreplyto="1051370524.6299.1407870518445.JavaMail.zimbra_at_intec.unl.edu.ar" -->
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
<strong>Subject:</strong> [OMPI users] OpenMPI 1.8.4 and hwloc in Fedora 14 using a beta gcc 5.0 compiler.<br>
<strong>From:</strong> Jorge D'Elia (<em>jdelia_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-12-11 17:40:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25965.php">Brice Goglin: "Re: [OMPI users] OpenMPI 1.8.4 and hwloc in Fedora 14 using a beta gcc 5.0 compiler."</a>
<li><strong>Previous message:</strong> <a href="25963.php">Siegmar Gross: "[OMPI users] ERROR: C_FUNLOC function"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2014/08/25005.php">Jorge D'Elia: "Re: [OMPI users] Open MPI 1.8.1: &quot;make all&quot; error: symbol `Lhwloc1' is already defined"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25965.php">Brice Goglin: "Re: [OMPI users] OpenMPI 1.8.4 and hwloc in Fedora 14 using a beta gcc 5.0 compiler."</a>
<li><strong>Reply:</strong> <a href="25965.php">Brice Goglin: "Re: [OMPI users] OpenMPI 1.8.4 and hwloc in Fedora 14 using a beta gcc 5.0 compiler."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear Jeff,
<br>
<p>Our updates of OpenMPI to 1.8.3 (and 1.8.4) were 
<br>
all OK using Fedora &gt;= 17 and system gcc compilers
<br>
on ia32 or ia64 machines. 
<br>
<p>However, the &quot;make all&quot; step failed using Fedora 14 
<br>
with a beta gcc 5.0 compiler on an ia32 machine 
<br>
with message like:
<br>
<p>Error: symbol `Lhwloc1' is already defined
<br>
<p>A roundabout way to solve it was perform, first, 
<br>
a separated installation of the hwloc package (we use 
<br>
Release v1.10.0 (stable)) and, second, configure 
<br>
OpenMPI using its flag: 
<br>
<p>&nbsp;&nbsp;--with-hwloc=${HWLOC_HOME}
<br>
<p>although, in this way, the include and library path 
<br>
must be given, e.g.
<br>
<p>&nbsp;export CFLAGS=&quot;-I/usr/beta/hwloc/include&quot; ; echo ${CFLAGS}
<br>
&nbsp;export LDFLAGS=&quot;-L/usr/beta/hwloc/lib&quot;    ; echo ${LDFLAGS}
<br>
&nbsp;export LIBS=&quot;-lhwloc&quot;                     ; echo ${LIBS}
<br>
<p>In order to verify that the hwloc works OK, it would be useful 
<br>
to include in the OpenMPI distribution a simple test like
<br>
<p>$ gcc ${CFLAGS} ${LDFLAGS} -o hwloc-hello.exe hwloc-hello.c ${LIBS}
<br>
$ ./hwloc-hello.exe
<br>
<p>(we apologize to forget to use the --with-hwloc-libdir flag ...).
<br>
<p>With this previous step we could overcome the fatal error 
<br>
in the configuration step related to the hwloc package.
<br>
<p>This (fixed) trouble in the configuration step is the same 
<br>
as the reported as:
<br>
<p>Open MPI 1.8.1: &quot;make all&quot; error: symbol `Lhwloc1' is already defined
<br>
<p>on 2014-08-12 15:08:38
<br>
<p><p>Regards,
<br>
Jorge.
<br>
<p>----- Mensaje original -----
<br>
<span class="quotelev1">&gt; De: &quot;Jorge D'Elia&quot; &lt;jdelia_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Para: &quot;Open MPI Users&quot; &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Enviado: Martes, 12 de Agosto 2014 16:08:38
</span><br>
<span class="quotelev1">&gt; Asunto: Re: [OMPI users] Open MPI 1.8.1: &quot;make all&quot; error: symbol `Lhwloc1' is already defined
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Dear Jeff,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; These new versions of the tgz files replace the previous ones:
</span><br>
<span class="quotelev1">&gt; I had used an old outdated session environment. However, the
</span><br>
<span class="quotelev1">&gt; configuration and installation was OK again in each case.
</span><br>
<span class="quotelev1">&gt; Sorry for the noise caused by the previous tgz files.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; Jorge.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ----- Mensaje original -----
</span><br>
<span class="quotelev2">&gt; &gt; De: &quot;Jorge D'Elia&quot; &lt;jdelia_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Para: &quot;Open MPI Users&quot; &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Enviados: Martes, 12 de Agosto 2014 15:16:19
</span><br>
<span class="quotelev2">&gt; &gt; Asunto: Re: [OMPI users] Open MPI 1.8.1: &quot;make all&quot; error: symbol `Lhwloc1'
</span><br>
<span class="quotelev2">&gt; &gt; is already defined
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Dear Jeff,
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; ----- Mensaje original -----
</span><br>
<span class="quotelev3">&gt; &gt; &gt; De: &quot;Jeff Squyres (jsquyres)&quot; &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Para: &quot;Open MPI User's List&quot; &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Enviado: Lunes, 11 de Agosto 2014 11:47:29
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Asunto: Re: [OMPI users] Open MPI 1.8.1: &quot;make all&quot; error: symbol
</span><br>
<span class="quotelev3">&gt; &gt; &gt; `Lhwloc1'
</span><br>
<span class="quotelev3">&gt; &gt; &gt; is already defined
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; The problem appears to be occurring in the hwloc component in OMPI.
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Can you download hwloc 1.7.2 (standalone) and try to build that on
</span><br>
<span class="quotelev3">&gt; &gt; &gt; the target machine and see what happens?
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt;     <a href="http://www.open-mpi.org/software/hwloc/v1.7/">http://www.open-mpi.org/software/hwloc/v1.7/</a>
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; OK. Just in case I tried both version 1.7.2 and 1.9 (stable).
</span><br>
<span class="quotelev2">&gt; &gt; Both gave no errors in the configuration or installation.
</span><br>
<span class="quotelev2">&gt; &gt; Attached a *.tgz file for each case. Greetings. Jorge.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt;  
</span><br>
<span class="quotelev3">&gt; &gt; &gt; On Aug 10, 2014, at 11:16 AM, Jorge D'Elia &lt;jdelia_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; wrote:
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; Hi,
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; I tried to re-compile Open MPI 1.8.1 version for Linux
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; on an ia32 machine with Fedora 14 although using the
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; last version of Gfortran (Gfortran 4.10 is required
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; by a user program which runs ok).
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; However, the &quot;make all&quot; phase breaks with the
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; error message:
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;  Error: symbol `Lhwloc1' is already defined
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; I attached a tgz file (tar -zcvf) with:
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;  Output &quot;configure.txt&quot; from &quot;./configure&quot; Open MPI phase;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;  The &quot;config.log&quot; file from the top-level Open MPI directory;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;  Output &quot;make.txt&quot;    from &quot;make all&quot; to build Open MPI;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;  Output &quot;make-v1.txt&quot; from &quot;make V=1&quot; to build Open MPI;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;  Outputs from cat /proc/version and cat /proc/cpuinfo
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; Please, any clue in order to fix?
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; Regards in advance.
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; Jorge.
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; --
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; CIMEC (UNL-CONICET) Predio CONICET-Santa Fe, Colectora Ruta Nac 168,
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; Paraje El Pozo, S3000GLN Santa Fe, ARGENTINA, <a href="http://www.cimec.org.ar/">http://www.cimec.org.ar/</a>
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; Tel +54 342 451.15.94/95 ext 1018, fax: +54-342-451.11.69
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; &lt;symbol-already-defined.tgz&gt;_______________________________________________
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; users mailing list
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; Link to this post:
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; <a href="http://www.open-mpi.org/community/lists/users/2014/08/24953.php">http://www.open-mpi.org/community/lists/users/2014/08/24953.php</a>
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; --
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Jeff Squyres
</span><br>
<span class="quotelev3">&gt; &gt; &gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; For corporate legal information go to:
</span><br>
<span class="quotelev3">&gt; &gt; &gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt; &gt; users mailing list
</span><br>
<span class="quotelev3">&gt; &gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Link to this post:
</span><br>
<span class="quotelev3">&gt; &gt; &gt; <a href="http://www.open-mpi.org/community/lists/users/2014/08/24975.php">http://www.open-mpi.org/community/lists/users/2014/08/24975.php</a>
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt; Link to this post:
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/community/lists/users/2014/08/25002.php">http://www.open-mpi.org/community/lists/users/2014/08/25002.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; CIMEC (UNL-CONICET) Predio CONICET-Santa Fe, Colectora Ruta Nac 168,
</span><br>
<span class="quotelev1">&gt; Paraje El Pozo, S3000GLN Santa Fe, ARGENTINA, <a href="http://www.cimec.org.ar/">http://www.cimec.org.ar/</a>
</span><br>
<span class="quotelev1">&gt; Tel +54 342 451.15.94/95 ext 1018, fax: +54-342-451.11.69
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2014/08/25005.php">http://www.open-mpi.org/community/lists/users/2014/08/25005.php</a>
</span><br>

<br><hr>
<ul>
<li>application/x-compressed-tar attachment: <a href="http://www.open-mpi.org/community/lists/users/att-25964/hwloc-hello.tgz">hwloc-hello.tgz</a>
</ul>
<!-- attachment="hwloc-hello.tgz" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25965.php">Brice Goglin: "Re: [OMPI users] OpenMPI 1.8.4 and hwloc in Fedora 14 using a beta gcc 5.0 compiler."</a>
<li><strong>Previous message:</strong> <a href="25963.php">Siegmar Gross: "[OMPI users] ERROR: C_FUNLOC function"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2014/08/25005.php">Jorge D'Elia: "Re: [OMPI users] Open MPI 1.8.1: &quot;make all&quot; error: symbol `Lhwloc1' is already defined"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25965.php">Brice Goglin: "Re: [OMPI users] OpenMPI 1.8.4 and hwloc in Fedora 14 using a beta gcc 5.0 compiler."</a>
<li><strong>Reply:</strong> <a href="25965.php">Brice Goglin: "Re: [OMPI users] OpenMPI 1.8.4 and hwloc in Fedora 14 using a beta gcc 5.0 compiler."</a>
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
