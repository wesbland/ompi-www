<?
$subject_val = "Re: [OMPI users] Hybrid OpenMPI / OpenMP run pins OpenMP threads to a single core";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul 29 12:49:21 2010" -->
<!-- isoreceived="20100729164921" -->
<!-- sent="Thu, 29 Jul 2010 12:49:23 -0400" -->
<!-- isosent="20100729164923" -->
<!-- name="Terry Dontje" -->
<!-- email="terry.dontje_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Hybrid OpenMPI / OpenMP run pins OpenMP threads to a single core" -->
<!-- id="4C51B113.3040403_at_oracle.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="AANLkTi=GqALH+0iCxxcoR0wShqBSEF+B0KoJfu521mvA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Hybrid OpenMPI / OpenMP run pins OpenMP threads to a single core<br>
<strong>From:</strong> Terry Dontje (<em>terry.dontje_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-07-29 12:49:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13873.php">Ralph Castain: "Re: [OMPI users] Hybrid OpenMPI / OpenMP run pins OpenMP threads to a single core"</a>
<li><strong>Previous message:</strong> <a href="13871.php">David Akin: "Re: [OMPI users] Hybrid OpenMPI / OpenMP run pins OpenMP threads to a single core"</a>
<li><strong>In reply to:</strong> <a href="13871.php">David Akin: "Re: [OMPI users] Hybrid OpenMPI / OpenMP run pins OpenMP threads to a single core"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13873.php">Ralph Castain: "Re: [OMPI users] Hybrid OpenMPI / OpenMP run pins OpenMP threads to a single core"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
No problem, anyways I think you are headed in the right direction now.
<br>
<p>--td
<br>
David Akin wrote:
<br>
<span class="quotelev1">&gt; Sorry for the confusion. What I need is for all OpenMP threads to 
</span><br>
<span class="quotelev1">&gt; *not* stay on one core. I *would* rather each OpenMP thread to run on 
</span><br>
<span class="quotelev1">&gt; a separate core. Is it my example code? My gut reaction is no because 
</span><br>
<span class="quotelev1">&gt; I can manipulate (somewhat) the cores the threads are assigned by 
</span><br>
<span class="quotelev1">&gt; adding -bysocket -bind-to-socket to mpirun.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Thu, Jul 29, 2010 at 10:08 AM, Terry Dontje 
</span><br>
<span class="quotelev1">&gt; &lt;terry.dontje_at_[hidden] &lt;mailto:terry.dontje_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     On Jul 29, 2010, at 5:09 AM, Terry Dontje wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     Ralph Castain wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     How are you running it when the threads are all on one core?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     If you are specifying --bind-to-core, then of course all the threads will be on one core since we bind the process (not the thread). If you are specifying -mca mpi_paffinity_alone 1, then the same behavior results.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     Generally, if you want to bind threads, the only way to do it is with a rank file. We -might- figure out a way to provide an interface for thread-level binding, but I'm not sure about that right now. As things stand, OMPI has no visibility into the fact that your app spawned threads.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;       
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     Huh???  That's not completely correct.  If you have a multiple
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     socket machine you could to -bind-to-socket -bysocket and spread
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     the processes that way.  Also couldn't you use the
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     -cpus-per-proc with -bind-to-core to get a process to bind to a
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     non-socket amount of cpus?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     Yes, you could do bind-to-socket, though that still constrains
</span><br>
<span class="quotelev2">&gt;&gt;     the threads to only that one socket. What was asked about here
</span><br>
<span class="quotelev2">&gt;&gt;     was the ability to bind-to-core at the thread level, and that is
</span><br>
<span class="quotelev2">&gt;&gt;     something OMPI doesn't support.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;     Sorry I did not get that constraint.  So to be clear what is being
</span><br>
<span class="quotelev1">&gt;     asked is to have the ability to bind a processes threads to
</span><br>
<span class="quotelev1">&gt;     specific cores.  If so then to the letter of what that means I
</span><br>
<span class="quotelev1">&gt;     agree you cannot do that. 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     However, what may be the next best thing is to specify binding of
</span><br>
<span class="quotelev1">&gt;     a process to a group of resources.  That's essentially what my
</span><br>
<span class="quotelev1">&gt;     suggestion above is doing. 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     I do agree with Ralph that once you start overloading the socket
</span><br>
<span class="quotelev1">&gt;     with more threads then it can handle problems will ensue.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     --td
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     This is all documented in the mpirun manpage.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     That being said, I also am confused, like Ralph, as to why no
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     options is causing your code bind.  Maybe add a
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     --report-bindings to your mpirun line to see what OMPI thinks it
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     is doing in this regard?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     This is a good suggestion - I'm beginning to believe that the
</span><br>
<span class="quotelev2">&gt;&gt;     binding is happening in the user's app and not OMPI.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     --td
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     --td
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     On Jul 28, 2010, at 5:47 PM, David Akin wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;       
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;     All,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;     I'm trying to get the OpenMP portion of the code below to run
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;     multicore on a couple of 8 core nodes.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;     Good news: multiple threads are being spawned on each node in the run.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;     Bad news: each of the threads only runs on a single core, leaving 7
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;     cores basically idle.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;     Sorta good news: if I provide a rank file I get the threads running on
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;     different cores within each node (PITA.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;     Here's the first lines of output.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;     /usr/mpi/gcc/openmpi-1.4-qlc/bin/mpirun -host c005,c006 -np 2 -rf
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;     rank.file -x OMP_NUM_THREADS=4 hybrid4.gcc
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;     Hello from thread 2 out of 4 from process 1 out of 2 on c006.local
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;     another parallel region:       name:c006.local MPI_RANK_ID=1 OMP_THREAD_ID=2
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;     Hello from thread 3 out of 4 from process 1 out of 2 on c006.local
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;     another parallel region:       name:c006.local MPI_RANK_ID=1 OMP_THREAD_ID=3
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;     Hello from thread 1 out of 4 from process 1 out of 2 on c006.local
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;     another parallel region:       name:c006.local MPI_RANK_ID=1 OMP_THREAD_ID=1
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;     Hello from thread 1 out of 4 from process 0 out of 2 on c005.local
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;     another parallel region:       name:c005.local MPI_RANK_ID=0 OMP_THREAD_ID=1
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;     Hello from thread 3 out of 4 from process 0 out of 2 on c005.local
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;     Hello from thread 2 out of 4 from process 0 out of 2 on c005.local
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;     another parallel region:       name:c005.local MPI_RANK_ID=0 OMP_THREAD_ID=3
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;     another parallel region:       name:c005.local MPI_RANK_ID=0 OMP_THREAD_ID=2
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;     Hello from thread 0 out of 4 from process 0 out of 2 on c005.local
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;     another parallel region:       name:c005.local MPI_RANK_ID=0 OMP_THREAD_ID=0
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;     Hello from thread 0 out of 4 from process 1 out of 2 on c006.local
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;     another parallel region:       name:c006.local MPI_RANK_ID=1 OMP_THREAD_ID=0
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;     another parallel region:       name:c005.local MPI_RANK_ID=0 OMP_THREAD_ID=3
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;     another parallel region:       name:c005.local MPI_RANK_ID=0 OMP_THREAD_ID=2
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;     another parallel region:       name:c005.local MPI_RANK_ID=0 OMP_THREAD_ID=0
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;     another parallel region:       name:c006.local MPI_RANK_ID=1 OMP_THREAD_ID=3
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;     another parallel region:       name:c005.local MPI_RANK_ID=0 OMP_THREAD_ID=3
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;     another parallel region:       name:c005.local MPI_RANK_ID=0 OMP_THREAD_ID=2
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;     another parallel region:       name:c006.local MPI_RANK_ID=1 OMP_THREAD_ID=0
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;     another parallel region:       name:c006.local MPI_RANK_ID=1 OMP_THREAD_ID=1
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;     .
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;     .
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;     .
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;     Here's the simple code:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;     #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;     #include &quot;mpi.h&quot;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;     #include &lt;omp.h&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;     int main(int argc, char *argv[]) {
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;      int numprocs, rank, namelen;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;      char processor_name[MPI_MAX_PROCESSOR_NAME];
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;      int iam = 0, np = 1;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;      char name[MPI_MAX_PROCESSOR_NAME];   /* MPI_MAX_PROCESSOR_NAME ==
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;     128         */
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;      int O_ID;                            /* OpenMP thread ID
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;             */
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;      int M_ID;                            /* MPI rank ID
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;             */
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;      int rtn_val;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;      MPI_Init(&amp;argc, &amp;argv);
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;      MPI_Comm_size(MPI_COMM_WORLD, &amp;numprocs);
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;      MPI_Comm_rank(MPI_COMM_WORLD, &amp;rank);
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;      MPI_Get_processor_name(processor_name, &amp;namelen);
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;      #pragma omp parallel default(shared) private(iam, np,O_ID)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;      {
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;        np = omp_get_num_threads();
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;        iam = omp_get_thread_num();
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;        printf(&quot;Hello from thread %d out of %d from process %d out of %d on %s\n&quot;,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;               iam, np, rank, numprocs, processor_name);
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;        int i=0;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;        int j=0;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;        double counter=0;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;        for(i =0;i&lt;99999999;i++)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                {
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                 O_ID = omp_get_thread_num();          /* get OpenMP
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;     thread ID                 */
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                 MPI_Get_processor_name(name,&amp;namelen);
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                 rtn_val = MPI_Comm_rank(MPI_COMM_WORLD,&amp;M_ID);
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                 printf(&quot;another parallel region:       name:%s
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;     MPI_RANK_ID=%d OMP_THREAD_ID=%d\n&quot;, name,M_ID,O_ID);
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                 for(j = 0;j&lt;999999999;j++)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                  {
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                   counter=counter+i;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                  }
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                }
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;      }
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;      MPI_Finalize();
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;     }
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;     _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;     users mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;     users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;     <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;         
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;       
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     -- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     &lt;Mail Attachment.gif&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     Terry D. Dontje | Principal Software Engineer
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     Developer Tools Engineering | +1.650.633.7054
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     Oracle * - Performance Technologies*
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     95 Network Drive, Burlington, MA 01803
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     Email terry.dontje_at_[hidden] &lt;mailto:terry.dontje_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     ------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;     _______________________________________________ users mailing
</span><br>
<span class="quotelev2">&gt;&gt;     list users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     -- 
</span><br>
<span class="quotelev1">&gt;     Oracle
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Terry D. Dontje | Principal Software Engineer
</span><br>
<span class="quotelev1">&gt;     Developer Tools Engineering | +1.650.633.7054
</span><br>
<span class="quotelev1">&gt;     Oracle * - Performance Technologies*
</span><br>
<span class="quotelev1">&gt;     95 Network Drive, Burlington, MA 01803
</span><br>
<span class="quotelev1">&gt;     Email terry.dontje_at_[hidden] &lt;mailto:terry.dontje_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     _______________________________________________
</span><br>
<span class="quotelev1">&gt;     users mailing list
</span><br>
<span class="quotelev1">&gt;     users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;     <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------
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
<p><p><pre>
-- 
Oracle
Terry D. Dontje | Principal Software Engineer
Developer Tools Engineering | +1.650.633.7054
Oracle * - Performance Technologies*
95 Network Drive, Burlington, MA 01803
Email terry.dontje_at_[hidden] &lt;mailto:terry.dontje_at_[hidden]&gt;
</pre>
<p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-13872/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<img src="http://www.open-mpi.org/community/lists/users/att-13872/02-part" alt="picture">
<!-- attachment="02-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13873.php">Ralph Castain: "Re: [OMPI users] Hybrid OpenMPI / OpenMP run pins OpenMP threads to a single core"</a>
<li><strong>Previous message:</strong> <a href="13871.php">David Akin: "Re: [OMPI users] Hybrid OpenMPI / OpenMP run pins OpenMP threads to a single core"</a>
<li><strong>In reply to:</strong> <a href="13871.php">David Akin: "Re: [OMPI users] Hybrid OpenMPI / OpenMP run pins OpenMP threads to a single core"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13873.php">Ralph Castain: "Re: [OMPI users] Hybrid OpenMPI / OpenMP run pins OpenMP threads to a single core"</a>
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
