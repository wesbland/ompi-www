#include "mpi.h" 
#include <pthread.h>
#include <stdlib.h>
#include <stdio.h>

void open_port(void *args);

int r1 = 0, r2 = 0;

#define THREADS_NUMBER 8
struct thread_args
 {
    int thread_number;
    int rank;
};
typedef struct thread_args thread_args;
pthread_mutex_t mymutex;
//tener en cuenta que los threads comunican serializados
int main(int argc, char **argv){
    int rank, size, i, provided, claimed;
    
    thread_args *argumentos = (thread_args*) malloc( THREADS_NUMBER*sizeof(thread_args));

    pthread_t *threads;
    threads=(pthread_t *)malloc(THREADS_NUMBER*sizeof(*threads));

    //MPI_Init (&argc, &argv);
    MPI_Init_thread( &argc, &argv, MPI_THREAD_FUNNELED, &provided );

    printf("after init\n");
    MPI_Comm_rank (MPI_COMM_WORLD, &rank);
    MPI_Comm_size (MPI_COMM_WORLD, &size);

    //pthread_mutex_init(&mymutex, NULL);
    for (i=0; i<THREADS_NUMBER; i++) {

        argumentos[i].rank=rank;
        argumentos[i].thread_number=i;

        pthread_create(&threads[i], NULL, (void *) open_port, (void *) &argumentos[i]);
    }

    for (i=0; i<THREADS_NUMBER; i++) {
        pthread_join(threads[i], NULL);
    }

    free(threads);
    free(argumentos);

    MPI_Finalize();

}

void open_port(void *args){
    thread_args *t_data = (struct thread_args *)args;
    int ret;
    char port_name[MPI_MAX_PORT_NAME];
    char name[MPI_MAX_PORT_NAME];
    MPI_Comm client;
    MPI_Open_port(MPI_INFO_NULL, port_name);
    
    printf("server [%d,%d] available at %s\n", t_data->rank, t_data->thread_number, port_name);

    snprintf(name, MPI_MAX_PORT_NAME, "radic_eventlog[%d,%d]", t_data->rank, t_data->thread_number);
    ret = MPI_Publish_name(name, MPI_INFO_NULL, port_name);
    
    printf("Published: %s, ret=%d\n", name, ret);
    
    //pthread_mutex_lock(&mymutex);
    MPI_Comm_accept(port_name, MPI_INFO_NULL, 0, MPI_COMM_SELF, &client);
    //pthread_mutex_unlock(&mymutex);
	MPI_Close_port(port_name);
    printf("Accepted Conexion [%d,%d]\n",t_data->rank, t_data->thread_number);
	sleep(5);
	MPI_Comm_disconnect(&client);	

}

