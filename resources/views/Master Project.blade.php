<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<body>

    <div class="row g-0">
        <div class="col-md-2 d-flex flex-column flex-shrink-0 p-3 text-white bg-dark" style="height: 100vh;">
          <a href="" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
            <i class="bi bi-twitter-x fs-2"></i><span class="fw-bold fs-3 ms-3">Twister</span>
          </a>
          <hr>
          <ul class="nav nav-pills flex-column mb-auto">
            <li class="nav-item">
              <a href="Home" class="nav-link text-white" aria-current="page">
                <i class="bi bi-houses me-2 fs-5"></i>
                Home
              </a>
            </li>
            <li>
              <a href="Master Project" class="nav-link active bg-light text-dark">
                <i class="bi bi-folder me-2 fs-5"></i>
                Master Project
              </a>
            </li>
            <li>
              <a href="Master Service" class="nav-link text-white">
                <i class="bi bi-tools me-2 fs-5"></i>
                Master Service
              </a>
            </li>
          </ul>
          <hr>
          <div class="dropdown">
            <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
              <img src="Roblox Thumb/Profil1.jpg" alt="" width="32" height="32" class="rounded-circle me-2">
              <strong>Nabil Ahmad F</strong>
            </a>
            <ul class="dropdown-menu dropdown-menu-dark text-small shadow" aria-labelledby="dropdownUser1">
              <li><a class="dropdown-item" href="#">Profile</a></li>
              <li><a class="dropdown-item" href="#">Settings</a></li>
              <li><a class="dropdown-item" href="#">Switch Account</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="#">Sign out</a></li>
            </ul>
          </div>
        </div>

  <div class="col-md-10" style="background-color: burlywood;">
    <div class="container-fluid">
        <div class="row p-3">
            <h1 class="mt-2 text-center">Sharing Game</h1>
        </div>
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h6>Data Game</h6>
                    </div>
                    <div class="card-body table-responsive">
                        <table class="table">
                            <thead>
                                <th scope="col">#</th>
                                <th scope="col">Title</th>
                                <th scope="col">Description</th>
                                <th scope="col">Action</th>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1.</th>
                                    <td>Elden_Ring</td>

                                    <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam, natus! Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat, laborum.</td>
                                    <td>
                                        <div class="d-flex justify-content-end">
                                        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#detailproject"><i class="bi bi-eye"></i></button>
                                        <button class="btn btn-success ms-1" data-bs-toggle="modal" data-bs-target="#detailproject2"><i class="bi bi-pencil-square"></i></button>
                                        <button class="btn btn-danger ms-1" data-bs-toggle="modal" data-bs-target="#delete"><i class="bi bi-trash"></i></button>
                                    </div>
                                </tr>
                            </tbody>
                          </table>
                          <table class="table table-responsive">
                            <tbody>
                                <tr>
                                    <th scope="row">2.</th>
                                    <td>Sekiro Goty</td>
                                    <td></td>
                                    <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam, natus! Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat, laborum.</td>
                                    <td>
                                        <div class="d-flex justify-content-end">
                                        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#detailproject"><i class="bi bi-eye"></i></button>
                                        <button class="btn btn-success ms-1" data-bs-toggle="modal" data-bs-target="#detailproject2"><i class="bi bi-pencil-square"></i></button>
                                        <button class="btn btn-danger ms-1" data-bs-toggle="modal" data-bs-target="#delete"><i class="bi bi-trash"></i></button>
                                    </div>
                                    </td>
                                </tr>
                            </tbody>
                          </table>
                          <table class="table table-responsive">
                            <tbody>
                                <tr>
                                    <th scope="row">3.</th>
                                    <td>Valorant</td>
                                    <td></td>
                                    <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam, natus! Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat, laborum.</td>
                                    <td>
                                        <div class="d-flex justify-content-end">
                                        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#detailproject"><i class="bi bi-eye"></i></button>
                                        <button class="btn btn-success ms-1" data-bs-toggle="modal" data-bs-target="#detailproject2"><i class="bi bi-pencil-square"></i></button>
                                        <button class="btn btn-danger ms-1" data-bs-toggle="modal" data-bs-target="#delete"><i class="bi bi-trash"></i></button>
                                    </div>
                                    </td>
                                </tr>
                            </tbody>
                          </table>

                          <div class="modal modal-fade" tabindex="-1" id="detailproject">
                                <div class="modal-dialog">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <h5 class="modal-title">Info Game</h5>
                                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                      <p>Sharing Game - Game Steam,dll</p>
                                    </div>
                                    <div class="modal-footer">
                                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                      <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Done</button>
                                    </div>
                                  </div>
                                </div>
                          </div>
                          <div class="modal fade" id="detailproject2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Message</h1>
                                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-footer">
                                  <input type="text" class="form-control bg-light" id="" aria-describedby="">
                                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                  <button type="button" class="btn btn-success">Save changes</button>
                                </div>
                              </div>
                            </div>
                        </div>
                        <div class="modal fade" id="delete" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                          <div class="modal-dialog">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">You sure want to delete this Message?</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                <button type="button" class="btn btn-danger ">Delete</button>
                              </div>
                            </div>
                          </div>
                      </div>

                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        <h6>Tambah Project</h6>
                    </div>
                    <div class="card-body">
                        <form action="">
                            <label class="form-label" for="">Game Type</label>
                            <select class="form-select" name="" id="">
                                <option value="">Souls Like</option>
                                <option value="">FPS</option>
                                <option value="">MMORPG</option>
                            </select>
                            <label class="form-label" for="">Game Name</label>
                            <input class="form-control" type="text" minlength="5" required>
                            <label class="form-label" for="">Shared Date</label>
                            <input class="form-control" type="date" required>
                            <label class="form-label" for="">Add Picture</label>
                            <input class="form-control" type="file" required>
                            <label class="form-label" for="">Description</label>
                            <textarea class="form-control" name="" id=""></textarea>
                            <label class="form-label" for="">Sharing Status</label>
                            <div class="form-check">
                                <input name="Status" class="form-check-input" type="radio">
                                <label class="form-check-label" for="">Public</label>
                            </div>
                            <div class="form-check">
                                <input name="Status" class="form-check-input" type="radio">
                                <label class="form-check-label" for="">Friends</label>
                            </div>
                            <input class="btn btn-success mt-2" type="submit" value="Simpan">
                            <input class="btn btn-danger mt-2" type="button" value="Cancel">
                        </form>
                    </div>
                    <div class="card-footer">

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
