// Simplified version
app.post('/login', async (req, res) => {
    const { email, password } = req.body;
    const user = await db.getUserByEmail(email);
  
    if (!user) {
      return res.status(400).send('User not found');
    }
  
    if (!user.isVerified) {
      return res.status(401).send('Please verify your email first');
    }
  
    const isMatch = await bcrypt.compare(password, user.password);
    if (!isMatch) {
      return res.status(400).send('Incorrect password');
  
    res.send('Login successful');
  }
}
);
  