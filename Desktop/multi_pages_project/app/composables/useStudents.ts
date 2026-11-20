export interface Student {
  name: string; studentId: string; program: string
  year: number; gpa: number; status: 'Active' | 'On leave' | 'Graduating'
}

export const useStudents = () => {
  const students: Student[] = [
    { name: 'Allyza Marie M. Lira', studentId: '241-03299', program: 'BS Information Technology', year: 3, gpa: 3.85, status: 'Active' },
    { name: 'Irene Rose T. Idea', studentId: '241-03307', program: 'BS Information Technology', year: 3, gpa: 3.4, status: 'Graduating' },
    { name: 'Wesley Ernest O. Lim', studentId: '241-12345', program: 'BS Information Technology', year: 3, gpa: 3.7, status: 'Active' },
    { name: 'Lea Andrade', studentId: '241-67891', program: 'BS Information Technology', year: 3, gpa: 3.2, status: 'On leave' },
    { name: 'Sophia Figuron', studentId: '241-06767', program: 'BS Information Technology', year: 3, gpa: 3.9, status: 'Active' },
  ]
  return { students }
}

