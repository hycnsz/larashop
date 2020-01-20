<?php

return [
    'alipay' => [
        'app_id'         => '2016102000727051',

        'ali_public_key' => 'MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAhRHAF9+Q+V2o5bNDsjbPet0xM6ihbTOyDzSF8nVoybbhi62Kq4nSCufZJuq3lNicYrcSB3BeFdxVPY+Sz9gioTf0bwMeERyCHf0vWA37JxyKgEz9nxc8cmtw1ywP3c+4smy70qDi11Lpjik3u9RheyPJ3hbUaqVLo6OqIB8xL9Ufs34cg1Rm4UeD7+FmsRINRyTZWCPjo9FI7vATBqAj7OpcvcCioEtu0+ckIESdba3necrchsS0vMtwK52O9AYaaTJqebJd/RssTvn/+FFIjCVY1NFqesMBuT2Uuax16hTflS2klkHZoTdbha7W9VAook+53sWLL0DZkKzI4CtqRQIDAQAB',

        'private_key'    => 'MIIEpQIBAAKCAQEA7p0c7wGURg+w8SsHPVw7NZm2tij56lXLYOhLs0EIG+Bo441x/IpjnlcdhaAybjnJwy4H5ZKFu17nZ1+NX6rrVzVXeQhyleckGBvJGZ5dPjrQPUdRp2HezOBIVyMyYwqir8jBDVgDQ5giRRBQEs22CaHUuQttv9fPa9C/x5PSJ/RjMeptmSKq5uPSuRc3Gy2nnELp32ODJtLuKw4Y5XsEGG+FY8Y5Iy8VVw3qt3JfV/+GZGPacyNgYGOsTk5pw027r0VlAjfQDjsah+iGNGzk0NnF9B93cKKrkHtu6dUJVNaJRva6TABptFghlk/c6SWo8Rnw3e5AjeqYK5lsosYQnwIDAQABAoIBAQCnsj3Cb76wWpjFdbMZ2bc3HXe+oB+8JF3SFpAVQ/AZ/2ZX/nGMxgnrH1h9MDAhLXXyOWiNXKOmIrXI/euSv8G0QaXfRyOY3KCOXQDBg34OnTD60CO/2lXGcR4GN5NS7geWOSYMZb2thL8ZALT18iMss9KX1kNkn5yELmqKLgZ10r1VN7zjFOeUHiKXd9CvGZR5GyjCUzjSqUIg0U7gMSIiVDadKTvfYgeNdsYjPUsHs5tSYCdG/WEP9fAzYw3oalvxQVnklnnKti8+2thjVRFLiZ7eD2A1nWxXuy0l1le95arlATIjVwbM4RXz7PN2ldNT56MUTKRgx/s+yjAZV0dpAoGBAP5MG4jnlzMqbjwxJZ6uHSNZa35jg/tjtPLKgHVmRGCkyPdYE1yqpe0Yo2HTyUyVSPg3wDjphGyueflM1EIYah1Dy2CbrII2MNF2C/0wNnzLHlo4ZEv5lI6y4q07T9Tf2J5huyyq4afVklCRt5zPbmCECN11kN8PecChCp6PvCRbAoGBAPA2H0YZnCvyKcWQ1whPkmOqJtcTHUp9jqPXp7aemZOCMyLLdB2i0RLb7jmH5N2ep3y9HnpRpEmToHngv+33Znn6QyWcSIQW/cCOrdAFIfRjeEEwHFAD3aQSIP3WOur3dGDVl3dwQhErAKZXxxHPSTYE5xtVeARZXzS8J+LvvigNAoGAZiCKrmDUCGhx/Rp/0Up7yUaQNSIiT0Or2BYboQqBS47iZvOoUv71xFKwywkTPv51X7qEKFcgJ8WqlsSUOjcz5qzjcNkUXvcEhBq0lepW96dbeUBMh3akguq0vn2jggqkJHd7hGTcW1sad+ENrJxh58EfDlG47Nx6OTJz4Vo4ZSECgYEAkBMmNtltfj5FJ6Z0ExwG5ZhMq3tfeipMv6C9ix8dZggVu6zj/FKHrBQVkpQbhYF/W6Xi/eKx8x+EhRV0iLp20Hp2g7x1EiToFfJ99eLeNsLigdblZGitK5dkClvQAtZhCyORMaY3OizcuuizEc+OTcQrCY396j3giLTCB69cEpECgYEA97NBbpawO9dSdMdqGSy9IP+E2D9kiYNPbsz6R61E1WEAiTctiozywjmJXbjEu88fWcY0oXnYIUlUN8bNe2HBsIqs/Pyo1bxKsBDipLDogbZRPR/t4U0hVwaaTWqnlHOiL+dp9Hsc8AXmkJxCcyrMy66DBVg3mdZyUEpbnMtmmG8=',
        
        'log'            => [
            'file' => storage_path('logs/alipay.log'),
        ],
    ],

    'wechat' => [
        'app_id'      => '',
        'mch_id'      => '',
        'key'         => '',
        'cert_client' => '',
        'cert_key'    => '',
        'log'         => [
            'file' => storage_path('logs/wechat_pay.log'),
        ],
    ],
];