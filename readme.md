## Requirements

Behind the scenes this package leverages [pdftotext](https://en.wikipedia.org/wiki/Pdftotext). You can verify if the binary installed on your system by issueing this command:

```bash
which pdftotext
```

If it is installed it will return the path to the binary.

To install the binary you can use this command on Ubuntu or Debian:

```bash
apt-get install poppler-utils
```

On a mac you can install the binary using brew

```bash
brew install poppler
```

If you're on RedHat, CentOS, Rocky Linux or Fedora use this:

```bash
yum install poppler-utils
```

Sample results for Elitech data logger

```bash
{
  "code": "RC-5+",
  "serial": "EFI241107334",
  "mode": "TLC30A08B",
  "data": [
    {
      "timestamp": 1739265882,
      "date": "2025-02-11",
      "time": "09:24:42",
      "temp": "27.9"
    },
    {
      "timestamp": 1739265892,
      "date": "2025-02-11",
      "time": "09:24:52",
      "temp": "27.9"
    },
    {
      "timestamp": 1739265902,
      "date": "2025-02-11",
      "time": "09:25:02",
      "temp": "27.9"
    }
  ]
}
```

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.