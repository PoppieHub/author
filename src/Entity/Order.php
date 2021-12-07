<?php

namespace App\Entity;

use App\Repository\OrderRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @property ArrayCollection $file
 * @ORM\Entity(repositoryClass=OrderRepository::class)
 * @ORM\Table(name="`order`")
 */
class Order
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=500)
     */
    private $name;

    /**
     * @ORM\Column(type="string", length=6000, nullable=true)
     */
    private $detalText;

    /**
     * @ORM\ManyToOne(targetEntity=Customer::class, inversedBy="orders")
     * @ORM\JoinColumn(nullable=false)
     */
    private $customer;

    /**
     * @ORM\ManyToOne(targetEntity=Author::class, inversedBy="orders")
     * @ORM\JoinColumn(nullable=false)
     */
    private $author;

    /**
     * @ORM\ManyToOne(targetEntity=Payment::class, inversedBy="orders")
     */
    private $payment;

    /**
     * @ORM\ManyToMany(targetEntity=CheckPoint::class, inversedBy="orders")
     */
    private $checkPoint;

    /**
     * @ORM\ManyToOne(targetEntity=Category::class, inversedBy="orders")
     */
    private $category;

    /**
     * @ORM\OneToMany(targetEntity=File::class, mappedBy="orders")
     */
    private $files;

    public function __construct()
    {
        $this->checkPoint = new ArrayCollection();
        $this->file = new ArrayCollection();
        $this->files = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getDetalText(): ?string
    {
        return $this->detalText;
    }

    public function setDetalText(?string $detalText): self
    {
        $this->detalText = $detalText;

        return $this;
    }

    public function getCustomer(): ?Customer
    {
        return $this->customer;
    }

    public function setCustomer(?Customer $customer): self
    {
        $this->customer = $customer;

        return $this;
    }

    public function getAuthor(): ?Author
    {
        return $this->author;
    }

    public function setAuthor(?Author $author): self
    {
        $this->author = $author;

        return $this;
    }

    public function getPayment(): ?Payment
    {
        return $this->payment;
    }

    public function setPayment(?Payment $payment): self
    {
        $this->payment = $payment;

        return $this;
    }

    public function getCategory(): ?Category
    {
        return $this->category;
    }

    public function setCategory(?Category $category): self
    {
        $this->category = $category;

        return $this;
    }

    /**
     * @return Collection|CheckPoint[]
     */
    public function getCheckPoint(): Collection
    {
        return $this->checkPoint;
    }

    public function addCheckPoint(CheckPoint $checkPoint): self
    {
        if (!$this->checkPoint->contains($checkPoint)) {
            $this->checkPoint[] = $checkPoint;
        }

        return $this;
    }

    public function removeCheckPoint(CheckPoint $checkPoint): self
    {
        $this->checkPoint->removeElement($checkPoint);

        return $this;
    }

    /**
     * @return Collection|File[]
     */
    public function getFiles(): Collection
    {
        return $this->files;
    }

    public function addFile(File $file): self
    {
        if (!$this->files->contains($file)) {
            $this->files[] = $file;
            $file->setOrders($this);
        }

        return $this;
    }

    public function removeFile(File $file): self
    {
        if ($this->files->removeElement($file)) {
            // set the owning side to null (unless already changed)
            if ($file->getOrders() === $this) {
                $file->setOrders(null);
            }
        }

        return $this;
    }

}
