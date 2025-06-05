<?php
$host = 'localhost';
$user = 'root';
$pass = ''; // Add password if you set one
$db = 'crud'; // change to your DB name

$conn = new mysqli($host, $user, $pass, $db);
session_start();
if (!isset($_SESSION['user'])) {
    header("Location: ../login.php");
    exit();
}
if ($conn->connect_error) {
    die('Connection failed: ' . $conn->connect_error);
}
// Upload logic
if (isset($_POST['upload'])) {
    $position = $_POST['position'];
    $title = $_POST['title'];
    $description = $_POST['description'];
    $image = $_FILES['image'];

    if ($image['name'] != '') {
        $imageName = time() . '_' . basename($image['name']);
        $target = "../uploads/engineering/" . $imageName; // Store in engineering uploads folder
        
        // Create uploads directory if it doesn't exist
        if (!file_exists('../uploads/engineering')) {
            mkdir('../uploads/engineering', 0777, true);
        }

        if (move_uploaded_file($image['tmp_name'], $target)) {
            $stmt = $conn->prepare("INSERT INTO engineering_images (image_name, image_path, position, title, description) VALUES (?, ?, ?, ?, ?)");
            $stmt->bind_param("ssiss", $imageName, $target, $position, $title, $description);
            if ($stmt->execute()) {
                $success_message = "Image uploaded successfully!";
            } else {
                $error_message = "Error uploading image: " . $conn->error;
            }
            $stmt->close();
        } else {
            $error_message = "Error moving uploaded file!";
        }
    }
}

// Edit form submission
if (isset($_POST['update'])) {
    $id = $_POST['edit_id'];
    $position = $_POST['edit_position'];
    $title = $_POST['edit_title'];
    $description = $_POST['edit_description'];
    
    if (!empty($_FILES['edit_image']['name'])) {
        // New image uploaded, replace old one
        $image = $_FILES['edit_image'];
        $imageName = time() . '_' . basename($image['name']);
        $target = "../uploads/engineering/" . $imageName;
        
        // Get old image to delete
        $getImage = $conn->query("SELECT image_path FROM engineering_images WHERE id = $id");
        if ($getImage->num_rows > 0) {
            $imgData = $getImage->fetch_assoc();
            $oldFilePath = $imgData['image_path'];
            if (file_exists($oldFilePath)) {
                unlink($oldFilePath);
            }
        }
        
        if (move_uploaded_file($image['tmp_name'], $target)) {
            $stmt = $conn->prepare("UPDATE engineering_images SET image_name=?, image_path=?, position=?, title=?, description=? WHERE id=?");
            $stmt->bind_param("ssissi", $imageName, $target, $position, $title, $description, $id);
        }
    } else {
        // No new image, just update other fields
        $stmt = $conn->prepare("UPDATE engineering_images SET position=?, title=?, description=? WHERE id=?");
        $stmt->bind_param("issi", $position, $title, $description, $id);
    }
    
    if ($stmt->execute()) {
        $success_message = "Image updated successfully!";
    } else {
        $error_message = "Error updating image: " . $conn->error;
    }
    $stmt->close();
    
    // Redirect to clear form submission
    header("Location: " . $_SERVER['PHP_SELF']);
    exit();
}

// Delete logic
if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    // First delete the image file
    $getImage = $conn->query("SELECT image_path FROM engineering_images WHERE id = $id");
    if ($getImage->num_rows > 0) {
        $imgData = $getImage->fetch_assoc();
        $filePath = $imgData['image_path'];
        if (file_exists($filePath)) {
            unlink($filePath);
        }
    }
    $conn->query("DELETE FROM engineering_images WHERE id = $id");
    
    // Redirect to clear the URL parameters
    header("Location: " . $_SERVER['PHP_SELF']);
    exit();
}

// Edit mode - load image data
$edit_mode = false;
$edit_data = null;
if (isset($_GET['edit'])) {
    $edit_id = $_GET['edit'];
    $result = $conn->query("SELECT * FROM engineering_images WHERE id = $edit_id");
    if ($result->num_rows > 0) {
        $edit_mode = true;
        $edit_data = $result->fetch_assoc();
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Engineering Department - Image Management System</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        /* Copy all styles from main.php */
        :root {
            --primary-color: #3498db;
            --secondary-color: #2980b9;
            --danger-color: #e74c3c;
            --success-color: #2ecc71;
            --light-color: #f8f9fa;
            --dark-color: #343a40;
            --border-color: #dee2e6;
        }
        
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }
        
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            line-height: 1.6;
            color: #333;
            background-color: #f5f5f5;
            padding: 20px;
        }
        
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }
        
        header {
            background-color: var(--dark-color);
            color: white;
            padding: 20px;
            border-radius: 5px;
            margin-bottom: 30px;
            text-align: center;
        }
        
        h1, h2, h3 {
            margin-bottom: 20px;
            color: var(--dark-color);
        }
        
        header h1 {
            color: white;
        }
        
        .card {
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            padding: 25px;
            margin-bottom: 30px;
        }
        
        /* Form styles */
        .form-group {
            margin-bottom: 20px;
        }
        
        label {
            display: block;
            margin-bottom: 8px;
            font-weight: 600;
        }
        
        input[type="text"],
        input[type="number"],
        textarea,
        select {
            width: 100%;
            padding: 10px 15px;
            border: 1px solid var(--border-color);
            border-radius: 4px;
            font-size: 16px;
            transition: border-color 0.2s;
        }
        
        input[type="file"] {
            padding: 10px 0;
        }
        
        input:focus, textarea:focus, select:focus {
            outline: none;
            border-color: var(--primary-color);
            box-shadow: 0 0 5px rgba(52, 152, 219, 0.3);
        }
        
        button, .btn {
            display: inline-block;
            background-color: var(--primary-color);
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.2s;
            text-decoration: none;
        }
        
        button:hover, .btn:hover {
            background-color: var(--secondary-color);
        }
        
        .btn-danger {
            background-color: var(--danger-color);
        }
        
        .btn-danger:hover {
            background-color: #c0392b;
        }
        
        .btn-success {
            background-color: var(--success-color);
        }
        
        .btn-success:hover {
            background-color: #27ae60;
        }
        
        /* Alert messages */
        .alert {
            padding: 15px;
            border-radius: 4px;
            margin-bottom: 20px;
        }
        
        .alert-success {
            background-color: #d4edda;
            color: #155724;
            border: 1px solid #c3e6cb;
        }
        
        .alert-danger {
            background-color: #f8d7da;
            color: #721c24;
            border: 1px solid #f5c6cb;
        }
        
        /* Gallery styles */
        .gallery {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
            gap: 25px;
        }
        
        .image-card {
            background-color: white;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s, box-shadow 0.3s;
            position: relative;
        }
        
        .image-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
        }
        
        .image-container {
            position: relative;
            height: 200px;
            overflow: hidden;
        }
        
        .image-container img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.3s;
        }
        
        .image-card:hover .image-container img {
            transform: scale(1.05);
        }
        
        .position-badge {
            position: absolute;
            top: 10px;
            right: 10px;
            background-color: var(--primary-color);
            color: white;
            border-radius: 50%;
            width: 35px;
            height: 35px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
            font-size: 16px;
        }
        
        .image-info {
            padding: 15px;
        }
        
        .image-info h3 {
            margin-bottom: 10px;
            font-size: 18px;
            color: var(--dark-color);
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }
        
        .image-description {
            font-size: 14px;
            color: #666;
            margin-bottom: 15px;
            display: -webkit-box;
            -webkit-line-clamp: 3;
            -webkit-box-orient: vertical;
            overflow: hidden;
            height: 60px;
        }
        
        .image-meta {
            font-size: 12px;
            color: #888;
            margin-bottom: 15px;
        }
        
        .action-buttons {
            display: flex;
            justify-content: space-between;
            padding: 0 15px 15px;
        }
        
        .btn-sm {
            padding: 5px 10px;
            font-size: 14px;
        }
        
        /* Form toggle */
        .form-toggle {
            display: flex;
            justify-content: space-between;
            margin-bottom: 20px;
        }
        
        /* Responsive */
        @media (max-width: 768px) {
            .gallery {
                grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
            }
        }
        
        @media (max-width: 480px) {
            .gallery {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <header>
            <h1><i class="fas fa-images"></i> Engineering Department - Image Management System</h1>
            <div style="text-align: right; margin-top: 10px;">
                <a href="engineering.php" class="btn btn-danger btn-sm">
                    <i class="fas fa-arrow-left"></i> Back to Engineering
                </a>
                <a href="../logout.php" class="btn btn-danger btn-sm">
                    <i class="fas fa-sign-out-alt"></i> Logout
                </a>
            </div>
        </header>
        
        <?php if (isset($success_message)): ?>
            <div class="alert alert-success">
                <?php echo $success_message; ?>
            </div>
        <?php endif; ?>
        
        <?php if (isset($error_message)): ?>
            <div class="alert alert-danger">
                <?php echo $error_message; ?>
            </div>
        <?php endif; ?>
        
        <div class="card">
            <h2><?php echo $edit_mode ? 'Edit Image' : 'Upload New Image'; ?></h2>
            
            <form method="POST" enctype="multipart/form-data">
                <?php if ($edit_mode): ?>
                    <input type="hidden" name="edit_id" value="<?php echo $edit_data['id']; ?>">
                <?php endif; ?>
                
                <div class="form-group">
                    <label for="<?php echo $edit_mode ? 'edit_title' : 'title'; ?>">Title:</label>
                    <input type="text" id="<?php echo $edit_mode ? 'edit_title' : 'title'; ?>" 
                           name="<?php echo $edit_mode ? 'edit_title' : 'title'; ?>" 
                           value="<?php echo $edit_mode ? htmlspecialchars($edit_data['title']) : ''; ?>" required>
                </div>
                
                <div class="form-group">
                    <label for="<?php echo $edit_mode ? 'edit_position' : 'position'; ?>">Position (1-10):</label>
                    <input type="number" id="<?php echo $edit_mode ? 'edit_position' : 'position'; ?>" 
                           name="<?php echo $edit_mode ? 'edit_position' : 'position'; ?>" 
                           min="1" max="10" 
                           value="<?php echo $edit_mode ? $edit_data['position'] : ''; ?>" required>
                </div>
                
                <div class="form-group">
                    <label for="<?php echo $edit_mode ? 'edit_description' : 'description'; ?>">Description:</label>
                    <textarea id="<?php echo $edit_mode ? 'edit_description' : 'description'; ?>" 
                              name="<?php echo $edit_mode ? 'edit_description' : 'description'; ?>" 
                              rows="4" required><?php echo $edit_mode ? htmlspecialchars($edit_data['description']) : ''; ?></textarea>
                </div>
                
                <div class="form-group">
                    <label for="<?php echo $edit_mode ? 'edit_image' : 'image'; ?>">
                        <?php echo $edit_mode ? 'New Image (leave empty to keep current image):' : 'Image:'; ?>
                    </label>
                    <input type="file" id="<?php echo $edit_mode ? 'edit_image' : 'image'; ?>" 
                           name="<?php echo $edit_mode ? 'edit_image' : 'image'; ?>" 
                           accept="image/*" <?php echo $edit_mode ? '' : 'required'; ?>>
                    
                    <?php if ($edit_mode): ?>
                        <div style="margin-top: 10px;">
                            <p>Current image:</p>
                            <img src="<?php echo $edit_data['image_path']; ?>" alt="Current image" style="max-width: 200px; max-height: 200px; margin-top: 10px;">
                        </div>
                    <?php endif; ?>
                </div>
                
                <div class="form-group">
                    <button type="submit" name="<?php echo $edit_mode ? 'update' : 'upload'; ?>" class="btn">
                        <?php echo $edit_mode ? 'Update Image' : 'Upload Image'; ?>
                    </button>
                    
                    <?php if ($edit_mode): ?>
                        <a href="<?php echo $_SERVER['PHP_SELF']; ?>" class="btn btn-danger">Cancel</a>
                    <?php endif; ?>
                </div>
            </form>
        </div>
        
        <div class="card">
            <h2>Uploaded Images</h2>
            <div class="gallery">
                <?php
                $result = $conn->query("SELECT * FROM engineering_images ORDER BY position ASC");
                while ($row = $result->fetch_assoc()): ?>
                    <div class="image-card">
                        <div class="image-container">
                            <img src="<?php echo $row['image_path']; ?>" alt="<?php echo htmlspecialchars($row['title']); ?>">
                            <div class="position-badge"><?php echo $row['position']; ?></div>
                        </div>
                        <div class="image-info">
                            <h3 title="<?php echo htmlspecialchars($row['title']); ?>"><?php echo htmlspecialchars($row['title']); ?></h3>
                            <div class="image-description"><?php echo htmlspecialchars($row['description']); ?></div>
                            <div class="image-meta">
                                <i class="far fa-calendar-alt"></i> <?php echo date('M d, Y H:i', strtotime($row['uploaded_at'])); ?>
                            </div>
                        </div>
                        <div class="action-buttons">
                            <a href="?edit=<?php echo $row['id']; ?>" class="btn btn-success btn-sm">
                                <i class="fas fa-edit"></i> Edit
                            </a>
                            <a href="?delete=<?php echo $row['id']; ?>" class="btn btn-danger btn-sm" 
                               onclick="return confirm('Are you sure you want to delete this image?')">
                                <i class="fas fa-trash"></i> Delete
                            </a>
                        </div>
                    </div>
                <?php endwhile; ?>
                
                <?php if ($result->num_rows == 0): ?>
                    <div style="grid-column: 1 / -1; text-align: center; padding: 30px;">
                        <i class="fas fa-image" style="font-size: 48px; color: #ccc; margin-bottom: 20px;"></i>
                        <p>No images uploaded yet. Use the form above to add images.</p>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</body>
</html> 