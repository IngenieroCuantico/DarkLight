// server //index.js


const express = require("express");
const PUERTO2 = process.env.PORT || 3002;
const PORT = process.env.PORT || 3000;
const app = express();
const AplicacionInicial = express();
app.use(express.json());





AplicacionInicial.get("/AplicacionInicial",(req, res)=>{
    res.json({message:"Hola Desde El Servidor Inicial!!! Ingeniero Dumar!!! AplicacionInicial"});

});



AplicacionInicial.listen(PUERTO2,()=>{
    console.log(`Servidor Escuchando Puerto ${PUERTO2}`);
});



app.get("/api",(req,res)=>{
  res.json({message:"Hola desde el servidor API"});
  

});


app.listen(PORT, () => {
  console.log(`Servidor escuchando puerto ${PORT}`);
});


const tasks =[];

//ruta para crear una tarea
app.post('/tasks', (req, res) => {
    const { title, description } = req.body;
    const newTask = {
      id: tasks.length + 1,
      title,
      description,
    };
    tasks.push(newTask);
    res.json(newTask);
  });
  
  // Ruta para obtener todas las tareas
  app.get('/tasks', (req, res) => {
    res.json(tasks);
  });
  
  // Ruta para obtener una tarea por ID
  app.get('/tasks/:id', (req, res) => {
    const taskId = parseInt(req.params.id);
    const task = tasks.find((t) => t.id === taskId);
    if (!task) {
      res.status(404).json({ error: 'Tarea no encontrada' });
    } else {
      res.json(task);
    }
  });
  
  // Ruta para actualizar una tarea por ID
  app.put('/tasks/:id', (req, res) => {
    const taskId = parseInt(req.params.id);
    const updatedTask = req.body;
    const existingTaskIndex = tasks.findIndex((t) => t.id === taskId);
    if (existingTaskIndex === -1) {
      res.status(404).json({ error: 'Tarea no encontrada' });
    } else {
      tasks[existingTaskIndex] = { ...tasks[existingTaskIndex], ...updatedTask };
      res.json(tasks[existingTaskIndex]);
    }
  });
  
  // Ruta para eliminar una tarea por ID
  app.delete('/tasks/:id', (req, res) => {
    const taskId = parseInt(req.params.id);
    const existingTaskIndex = tasks.findIndex((t) => t.id === taskId);
    if (existingTaskIndex === -1) {
      res.status(404).json({ error: 'Tarea no encontrada' });
    } else {
      const deletedTask = tasks.splice(existingTaskIndex, 1);
      res.json(deletedTask[0]);
    }
  });